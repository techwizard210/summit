@extends('layouts.app')

@section('content')
    <main class="auth_container">
        <header>
            <img src="{{ asset('/assets/svg/logo.svg') }}" alt="logo">
        </header>
        <div class="form_wrapper">
            <div class="form_content">
                <div class="form_box">
                    <form id="sign_in_form" action="{{ route('authenticate') }}" method="POST">
                        <div class="title">
                        </div>
                        <div class="input_group">
                            <x-input name="company_name" placeholder="Company Name" />
                            <x-input name="team_number" placeholder="Team Number" type="number" />
                            <x-select />
                            <x-input name="password" placeholder="Password" type="password" />
                        </div>
                        <div class="action_wrap">
                            <button type="submit">Sign in</button>
                            <p>Need an account? <span id="to_sign_in">Sign up</span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
