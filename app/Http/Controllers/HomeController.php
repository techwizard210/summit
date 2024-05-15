<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use ZipArchive;
use File;

use App\Models\Photo;
use App\Models\Group;
use App\Models\Clue;

class HomeController extends Controller {
    public function show() {
        $group_id = Session::get( 'group_id' );
        $groups = Group::get()->toArray();
        $clues = Clue::with( 'group' )->where( 'group_id', $group_id )->get()->toArray();

        foreach ( $clues as $index => $clue ) {
            if ( Photo::where( 'user_id', Auth::id() )->where( 'clue_id', $clue[ 'id' ] )->count() > 0 ) {
                $photoUrl = Photo::where( 'user_id', Auth::id() )->where( 'clue_id', $clue[ 'id' ] )->value( 'path' );
            } else {
                $photoUrl = '';
            }
            $clues[ $index ][ 'path' ] = $photoUrl;
        }
        return view( 'home', compact( 'clues', 'groups' ) );
    }

    public function uploadPhoto( Request $request ) {
        $user_id = Auth::id();
        $group_id = Session::get( 'group_id' );
        $clue_id = $request->input( 'clue_id' );

        $photo = Photo::updateOrCreate(
            [ 'clue_id' => $clue_id, 'user_id' => $user_id ],
            [
                'group_id' => $group_id,
                'path' => ''
            ]
        );

        $path = Storage::putFileAs(
            'public/photos', $request->file( 'photo' ), $photo->id.'.jpg'
        );

        $photo->path = str_replace( 'public', 'storage', $path );
        $photo->save();

        return redirect()->intended( 'home' );
    }

    public function getPhotosByUser( Request $request ) {
        $user_id = Auth::id();
        $paths = Photo::where( 'user_id', $user_id )->pluck( 'path' );
        return $paths;
    }

    public function downloadFolder() {
        $user_id = Auth::id();
        $company_name = Auth::user()->toArray()[ 'company_name' ];
        $team_number = Auth::user()->toArray()[ 'team_number' ];
        $group_id = Session::get( 'group_id' );
        $group_name = Group::where('id', $group_id)->value('name');

        $zipFileName = $company_name.'_'.$team_number.'_'.$group_name . '.zip';
        $zipFilePath = storage_path( 'app/public/' . $zipFileName );
        $zip = new ZipArchive();

        $photo_ids = Photo::where( 'user_id', $user_id )->where( 'group_id', $group_id )->pluck( 'id' );

        $files = array();
        foreach ( $photo_ids as $key => $photo_id ) {
            array_push( $files, storage_path( 'app/public/photos/' . $photo_id . '.jpg' ) );
        }

        if ( $zip->open( $zipFilePath, ZipArchive::CREATE ) === TRUE ) {
            // Add files to the zip archive
            foreach ( $files as $file ) {
                if ( File::exists( $file ) ) {
                    $zip->addFile( $file, basename( $file ) );
                }
            }

            $zip->close();

            return response()->download( $zipFilePath )->deleteFileAfterSend( true );
        }
    }
}
