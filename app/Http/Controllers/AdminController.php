<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    public function show() {
        return view( 'auth.admin' );
    }

    public function home() {
        return view( 'admin' );
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
