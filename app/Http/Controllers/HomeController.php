<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use ZipArchive;

use App\Models\Photo;

class HomeController extends Controller {
    public function show() {
        $clues = array(
            array(
                'id' => '1',
                'title' => 'WELCOME TO BLUE MOUNTAIN QUEST!',
                'subTitle' => 'READY TO START',
                'imgUrl' => '/assets/images/blue-mountain.jpeg'
            ),
            array(
                'id' => '2',
                'title' => 'WELCOME TO BLUE MOUNTAIN QUEST!',
                'subTitle' => 'second start',
                'imgUrl' => '/assets/images/blue-mountain.jpeg'
            ),
        );

        return view( 'home', [ 'clues' => $clues ] );
    }

    public function uploadPhoto( Request $request ) {
        $user_id = Auth::id();
        $group_id = ( int )Auth::user()->toArray()[ 'group_id' ];
        $clue_id = $request->input( 'clue_id' );

        $path = Storage::putFileAs(
            'public/images/'.$user_id.'/'.$group_id, $request->file( 'photo' ), $clue_id.'.jpg'
        );

        Photo::updateOrCreate(
            [ 'clue_id' => $clue_id ],
            [
                'path' => str_replace( 'public', 'storage', $path ),
                'user_id' => $user_id,
                'group_id' => $group_id,
            ]
        );

        return redirect()->intended( 'home' );
    }

    public function getPhotosByUser( Request $request ) {
        $user_id = Auth::id();
        $paths = Photo::where( 'user_id', $user_id )->pluck( 'path' );
        return $paths;
    }

    public function downloadFolder() {
        $user_id = 1;
        $folderName = $user_id;
        $zipFileName = $user_id . '.zip';
        $zipFilePath = storage_path( 'app/public/' . $zipFileName );
        $folderPath = storage_path( 'app/public/images/' . $folderName );
        $zip = new ZipArchive();

        if ( $zip->open( $zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE ) === true ) {
            // Get all files in the folder
            $files = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator( $folderPath ),
                \RecursiveIteratorIterator::LEAVES_ONLY
            );

            // Add files to the ZIP archive
            foreach ( $files as $name => $file ) {
                if ( !$file->isDir() ) {
                    // Get real and relative paths for current file
                    $filePath = $file->getRealPath();
                    $relativePath = substr( $filePath, strlen( $folderPath ) + 1 );

                    // Add file to the ZIP archive
                    $zip->addFile( $filePath, $relativePath );
                }
            }

            // Close the ZIP archive
            $zip->close();
        }

        return response()->download( $zipFilePath )->deleteFileAfterSend( true );
    }
}
