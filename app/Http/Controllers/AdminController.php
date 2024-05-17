<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use ZipArchive;
use File;

use App\Models\Group;
use App\Models\Clue;
use App\Models\User;
use App\Models\Photo;

class AdminController extends Controller {
    public function show() {
        return view( 'auth.admin' );
    }

    public function home() {
        $user_id = 2;
        $group_id = 1;
        $groups = Group::get()->toArray();
        $users = User::where( 'company_name', '!=', 'admin' )->get()->toArray();
        $photos = Photo::with( 'clue' )->where( 'user_id', $user_id )->where( 'group_id', $group_id )->get()->toArray();
        return view( 'admin', compact( 'groups', 'users', 'photos', 'user_id', 'group_id' ) );
    }

    public function authenticate( Request $request ) {
        $name = $request->input( 'name' );
        $password = $request->input( 'password' );

        if ( $name !== 'admin' ) {
            return redirect()->route( 'admin.auth' )->with( 'msg', 'wrong credentials' );
        }

        if ( Auth::attempt( [ 'company_name' => $name, 'password' => $password ] ) ) {
            return redirect()->route( 'admin.home' )->with( 'msg', 'welcome admin' );
        } else {
            return redirect()->route( 'admin.auth' )->with( 'msg', 'wrong credentials' );
        }
    }

    public function browsePhoto( Request $request ) {
        $user_id = $request->input( 'user_id' );
        $group_id = $request->input( 'group_id' );
        $groups = Group::get()->toArray();
        $users = User::where( 'company_name', '!=', 'admin' )->get()->toArray();
        $photos = Photo::with( 'clue' )->where( 'user_id', $user_id )->where( 'group_id', $group_id )->get()->toArray();
        return view( 'admin', compact( 'groups', 'users', 'photos', 'user_id', 'group_id' ) );
    }

    public function showClue() {
        $user_id = 2;
        $group_id = 1;
        $clues = Clue::with( 'group' )->get()->toArray();
        $groups = Group::get()->toArray();
        return view( 'clue', compact( 'clues', 'groups', 'user_id', 'group_id' ) );
    }

    public function addClue( Request $request ) {
        $title = $request->input( 'title' );
        $point = ( int ) $request->input( 'point' );
        $description = $request->input( 'description' );
        $group_id = $request->input( 'group_id' );

        $new_clue = new Clue();
        $new_clue->title = $title;
        $new_clue->point = $point;
        $new_clue->description = $description;
        $new_clue->group_id = $group_id;
        $new_clue->save();

        if ( $request->file( 'clue_photo' ) != null ) {
            $path = Storage::putFileAs(
                'public/clues', $request->file( 'clue_photo' ), $new_clue->id.'.jpg'
            );

            $new_clue->image_path = str_replace( 'public', 'storage', $path );
            $new_clue->save();
        }

        return back()->with( 'msg', 'successfully added' );
    }

    public function editClue( Request $request ) {
        $edit_id = $request->input( 'edit_clue_id' );
        $edit_group_id = $request->input( 'edit_group_id' );
        $edit_title = $request->input( 'edit_title' );
        $edit_point = $request->input( 'edit_point' );
        $edit_description = $request->input( 'edit_description' );

        if ( !empty( $request->file( 'edit_clue_photo' ) ) ) {
            $path = Storage::putFileAs(
                'public/clues', $request->file( 'edit_clue_photo' ), $edit_id.'.jpg'
            );
            $path = str_replace( 'public', 'storage', $path );
            Clue::where( 'id', $edit_id )->update( [ 'group_id' => $edit_group_id, 'title' => $edit_title, 'point' => $edit_point, 'description' => $edit_description, 'image_path' => $path ] );
        } else {
            Clue::where( 'id', $edit_id )->update( [ 'group_id' => $edit_group_id, 'title' => $edit_title, 'point' => $edit_point, 'description' => $edit_description ] );
        }

        return redirect()->route( 'admin.showClue' )->with( 'msg', 'edited successfully' );
    }

    public function deleteClue( Request $request ) {
        $clue_id = $request->input( 'delete_clue_id' );
        Clue::where( 'id', $clue_id )->delete();

        return back()->with( 'msg', 'deleted successfully' );
    }

    public function showGroup() {
        $user_id = 2;
        $group_id = 1;
        $groups = Group::get()->toArray();
        return view( 'group', compact( 'groups', 'user_id', 'group_id' ) );
    }

    public function addGroup( Request $request ) {
        $group_name = $request->input( 'group_name' );
        if ( empty( $group_name ) ) {
            return back()->with( 'msg', 'input group name' );
        }
        $count = Group::where( 'name', $group_name )->count();
        if ( $count > 0 ) {
            return redirect()->route( 'admin.showGroup' )->with( 'msg', 'group name already exist' );
        }
        $group = new Group();
        $group->name = $group_name;
        $group->save();

        return back()->with( 'msg', 'added successfully' );
    }

    public function editGroup( Request $request ) {
        $group_name = $request->input( 'edit_group_name' );
        $group_id = $request->input( 'edit_group_id' );

        Group::where( 'id', $group_id )->update( [ 'name' => $group_name ] );

        return back()->with( 'msg', 'edited successfully' );
    }

    public function deleteGroup( Request $request ) {
        $group_id = $request->input( 'delete_group_id' );
        Group::where( 'id', $group_id )->delete();

        return back()->with( 'msg', 'deleted successfully' );
    }

    public function downloadFolder( Request $request ) {
        $user_id = $request->input( 'download_user_id' );
        $group_id = $request->input( 'download_group_id' );

        $company_name = User::where( 'id', $user_id )->value( 'company_name' );
        $team_number = User::where( 'id', $user_id )->value( 'team_number' );
        $group_name = Group::where( 'id', $group_id )->value( 'name' );

        $zipFileName = $company_name.'_'.$team_number.'_'.$group_name . '.zip';
        $zipFilePath = storage_path( 'app/public/' . $zipFileName );
        $zip = new ZipArchive();

        $photo_ids = Photo::where( 'user_id', $user_id )->where( 'group_id', $group_id )->pluck( 'id' );

        $files = array();
        foreach ( $photo_ids as $key => $photo_id ) {
            array_push( $files, storage_path( 'app/public/photos/' . $photo_id . '.jpg' ) );
        }

        if ( $zip->open( $zipFilePath, ZipArchive::CREATE ) === TRUE ) {
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
