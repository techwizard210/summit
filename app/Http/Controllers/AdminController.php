<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Group;
use App\Models\Clue;

class AdminController extends Controller {
    public function show() {
        return view( 'auth.admin' );
    }

    public function home() {
        return view( 'admin' );
    }

    public function showClue() {
        $clues = Clue::with( 'group' )->get()->toArray();
        return view( 'clue', compact( 'clues' ) );
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
        return redirect()->route( 'admin.showGroup' )->with( 'msg', 'successfully added' );
    }

    public function addClue( Request $request ) {

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
