<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Photo;

class HomeController extends Controller {
    public function show() {
        return view( 'home' );
    }

    public function uploadPhoto( Request $request ) {
        $user_id = 1;
        $clue_id = 2;
        $group_id = 1;

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
        $user_id = 1;
        $paths = Photo::where( 'user_id', $user_id )->pluck( 'path' );
        return $paths;
    }
}
