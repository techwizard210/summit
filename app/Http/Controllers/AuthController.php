<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller {
    public function show() {
        return view( 'auth.auth' );
    }

    public function showSignup() {
        return view( 'auth.register' );
    }

    public function authenticate( Request $request ) {
        $company_name = $request->input( 'company_name' );
        $team_number = $request->input( 'team_number' );
        $password = $request->input( 'password' );

        if ( Auth::attempt( [ 'company_name' => $company_name, 'team_number' => $team_number, 'password' => $password ] ) ) {
            return redirect()->intended( 'home' )->with('msg', 'welcome');
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
