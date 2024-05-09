@extends('layouts.app')

@section('content')
<div class="home">
    <div class="home_wrapper">        
       <header>
            <h1>BMQ2</h1>
            <img src="{{ asset("/assets/svg/power-off-svgrepo-com.svg") }}" alt="">
       </header>
       <div class="card_wrapper">
            <x-card title="WELCOME TO BLUE MOUNTAIN QUEST!"/>
            <x-card title="WELCOME TO BLUE MOUNTAIN QUEST!" />
            <x-card title="WELCOME TO BLUE MOUNTAIN QUEST!" />
            <x-card title="WELCOME TO BLUE MOUNTAIN QUEST!" />
            <x-card title="WELCOME TO BLUE MOUNTAIN QUEST!" />
       </div>
    </div>
</div>
@endsection
