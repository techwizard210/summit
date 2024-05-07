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
          <form action="">
                <div class="title">
                    <img src="{{ asset('/assets/svg/door.svg') }}" alt="">
                    <div>
                        <p>Sign in</p>
                        <h1>Enter your credentials</h1>
                    </div>
                </div>
                <div class="input_group">
                    <x-input name="username" label="Username" placeholder="Username" />
                    <x-input name="password" label="Password" placeholder="Password" type="password"/>
                </div>
                <button>Sign in</button>
            <form />
          </div>
        </div>
        
    </div>
</main>
@endsection


