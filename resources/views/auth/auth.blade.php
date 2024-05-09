@extends('layouts.app')

@section('content')
<main class="auth_container">
    <header>
        <img src="{{ asset('/assets/svg/logo.svg') }}" alt="logo">
    </header>
    <div class="form_wrapper">
        <div class="form_content">
            <div class="form_hero">
                <img src="{{ asset('/assets/images/login-hero.png') }}" alt="a man with a laptop">
            </div>
          <div class="form_box">
            <form id="sign_in_form" >
            <div class="title">
                <img src="{{ asset('/assets/svg/door.svg') }}" alt="">
                <div>
                    <h1>Sign In</h1>
                </div>
            </div>
            <div class="input_group">
                <x-input name="company_name" placeholder="Company Name" />
                <x-input name="team_number"  placeholder="Team Number" type="number"/>   
                <x-select />
                <x-input name="password" placeholder="Password" type="password"/>
            </div>
            <div class="action_wrap">      
                <button>Sign in</button>
                <p>Need an account? <span id="to_sign_in">Sign up</span></p>
            </div>
        <form />
          </div>
        </div>
    </div>
</main>
<script>
    console.log('sfsdfsdfsdsdf');
</script>
@endsection
