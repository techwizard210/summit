@extends('layouts.app')

@section('content')
<div class="home">
    <div class="home_wrapper">        
       <header>
            <h1>BMQ2</h1>
            <img src="{{ asset("/assets/svg/power-off-svgrepo-com.svg") }}" alt="">
       </header>
       <div class="card_wrapper">
            <x-card />
            <x-card />
            <x-card />
            <x-card />
            <x-card />
       </div>
    </div>
</div>
@endsection
