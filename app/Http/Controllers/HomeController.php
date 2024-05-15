<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use ZipArchive;
use File;

use App\Models\Photo;

class HomeController extends Controller {
    public function show() {
        $clues = array(
            array(
                'id' => 1,
                'title' => 'WELCOME TO BLUE MOUNTAIN QUEST!',
                'subTitle' => 'READY TO START',
                'imgUrl' => '/assets/images/blue-mountain.jpeg'
            ),
            array(
                'id' => 2,
                'title' => 'CLUE1',
                'subTitle' => '10 POINTS',
                'imgUrl' => '/assets/images/blue-mountain.jpeg'
            ),
            array(
                'id' => 3,
                'title' => 'CLUE2',
                'subTitle' => '10 POINTS',
                'imgUrl' => '/assets/images/blue-mountain.jpeg'
            ),
            array(
                'id' => 4,
                'title' => 'CLUE3',
                'subTitle' => '10 POINTS',
                'imgUrl' => '/assets/images/blue-mountain.jpeg'
            ),
            array(
                'id' => 5,
                'title' => 'CLUE4',
                'subTitle' => '10 POINTS',
                'imgUrl' => '/assets/images/blue-mountain.jpeg'
            )
        );

        foreach ( $clues as $index => $clue ) {
            if ( Photo::where( 'user_id', Auth::id() )->where( 'group_id', ( int )Auth::user()->toArray()[ 'group_id' ] )->where( 'clue_id', $clue[ 'id' ] )->count() > 0 ) {
                $photoUrl = Photo::where( 'user_id', Auth::id() )->where( 'group_id', ( int )Auth::user()->toArray()[ 'group_id' ] )->where( 'clue_id', $clue[ 'id' ] )->pluck( 'path' )[ 0 ];
            } else {
                $photoUrl = '';
            }
            $clues[ $index ][ 'path' ] = $photoUrl;
        }

        return view( 'home', compact( 'clues' ) );
    }

    public function uploadPhoto( Request $request ) {
        $user_id = Auth::id();
        $group_id = ( int )Auth::user()->toArray()[ 'group_id' ];
        $clue_id = $request->input( 'clue_id' );

        $photo = Photo::updateOrCreate(
            [ 'clue_id' => $clue_id, 'user_id' => $user_id ],
            [
                'group_id' => $group_id,
                'path' => ''
            ]
        );

        $path = Storage::putFileAs(
            'public', $request->file( 'photo' ), $photo->id.'.jpg'
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
        $group_id = ( int )Auth::user()->toArray()[ 'group_id' ];
        $group_name = ( int )Auth::user()->toArray()[ 'group_id' ];

        $zipFileName = $company_name.'_'.$team_number.'_'.$group_name . '.zip';
        $zipFilePath = storage_path( 'app/public/' . $zipFileName );
        $zip = new ZipArchive();

        $photo_ids = Photo::where( 'user_id', $user_id )->where( 'group_id', $group_id )->pluck( 'id' );

        $files = array();
        foreach ( $photo_ids as $key => $photo_id ) {
            array_push( $files, storage_path( 'app/public/' . $photo_id . '.jpg' ) );
        }

        if ($zip->open($zipFilePath, ZipArchive::CREATE) === TRUE)
        {
            // Add files to the zip archive
            foreach ($files as $file) {
                if (File::exists($file)) {
                    $zip->addFile($file, basename($file));
                }
            }

            // Close the zip archive
            $zip->close();

            // Download the zip file
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        }
    }
}
