<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Group;
use App\Models\Clue;

class AdminController extends Controller {
    public function show() {
        return view( 'auth.admin' );
    }

    public function home() {
        $groups = Group::get()->toArray();
        return view( 'admin', compact( 'groups' ) );
    }

    public function showClue() {
        $clues = Clue::with( 'group' )->get()->toArray();
        $groups = Group::get()->toArray();
        return view( 'clue', compact( 'clues', 'groups' ) );
    }

    public function showGroup() {
        $groups = Group::get()->toArray();
        return view( 'group', compact( 'groups' ) );
    }

    public function addGroup( Request $request ) {
        $group_name = $request->input( 'group_name' );
        $count = Group::where( 'name', $group_name )->count();
        if ( $count > 0 ) {
            return redirect()->route( 'admin.showGroup' )->with( 'msg', 'group name already exist' );
        }
        $group = new Group();
        $group->name = $group_name;
        $group->save();

        return back()->with( 'msg', 'successfully added' );
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
}
