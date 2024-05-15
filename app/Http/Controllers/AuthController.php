<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\Group;

class AuthController extends Controller {
    public function show() {
        $groups = Group::get()->toArray();
        return view( 'auth.auth', compact( 'groups' ) );
    }

    public function showSignup() {
        return view( 'auth.register' );
    }

    public function authenticate( Request $request ) {
        $company_name = $request->input( 'company_name' );
        $team_number = $request->input( 'team_number' );
        $group_name = $request->input( 'group_name' );
        $password = $request->input( 'password' );

        $count = Group::where( 'name', $group_name )->count();

        if ( $count === 0 ) {
            return redirect()->route( 'login' )->with( 'msg', 'Input valid group name' );
        }

        $group_id = Group::where( 'name', $group_name )->value( 'id' );

        if ( Auth::attempt( [ 'company_name' => $company_name, 'team_number' => $team_number, 'password' => $password ] ) ) {
            Session::put( 'group_id', $group_id );
            return redirect()->intended( 'home' )->with( 'msg', 'welcome' );
        } else {
            return redirect()->route( 'login' )->with( 'msg', 'wrong credentials' );
        }
    }

    public function register ( Request $request ) {
        $company_name = $request->input( 'company_name' );
        $team_number = $request->input( 'team_number' );
        $password = $request->input( 'password' );
        $re_password = $request->input( 're_password' );

        if ( $password !== $re_password ) {
            return redirect()->route( 'signup' )->with( 'msg', 'Password mismatched' );
        }

        $count = User::where( 'company_name', $company_name )->where( 'team_number', $team_number )->count();
        if ( $count > 0 ) {
            return redirect()->route( 'signup' )->with( 'msg', 'User already exist' );
        } else {
            $user = new User;

            $user->company_name = $company_name;
            $user->team_number = $team_number;
            $user->password = Hash::make( $password );
            $user->group_id = '';

            $user->save();

            return redirect()->route( 'login' )->with( 'msg', 'Registered successully' );
        }
    }

    public function logout( Request $request ): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect( '/' );
    }
}
