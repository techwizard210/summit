<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function show() {
        return view( 'auth.auth' );
    }

    public function authenticate( Request $request ) {
        $company_name = $request->input( 'company_name' );
        $team_number = $request->input( 'team_number' );
        $password = $request->input( 'password' );

        if ( Auth::attempt( [ 'company_name' => $company_name, 'team_number' => $team_number, 'password' => $password ] ) ) {
            return redirect()->intended('home');
        }
    }
}
