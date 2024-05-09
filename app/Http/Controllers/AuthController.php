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

    public function authenticate( Request $request ) {
        $company_name = $request->input( 'company_name' );
        $team_number = $request->input( 'team_number' );
        $password = $request->input( 'password' );

        if ( Auth::attempt( [ 'company_name' => $company_name, 'team_number' => $team_number, 'password' => $password ] ) ) {
            return redirect()->intended( 'home' );
        } else {
            return redirect()->route( 'login' );
        }
    }

    public function register ( Request $request ) {
        $company_name = $request->input( 'company_name' );
        $team_number = $request->input( 'team_number' );
        $password = $request->input( 'password' );

        $count = User::where( 'company_name', $company_name )->where( 'team_number', $team_number )->count();
        if ( $count > 0 ) {
            return redirect()->route( 'login', [ 'msg' => 'user already exists' ] );
        } else {
            $user = new User;

            $user->company_name = $company_name;
            $user->team_number = $team_number;
            $user->password = Hash::make( $password );
            $user->group_id = '';

            $user->save();

            return redirect()->route( 'login' );
        }
    }

    public function logout( Request $request ): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect( '/' );
    }
}
