@extends('layouts.app')

@section('content')
    <div>
        {{--          importing image          --}}
        <img src={{ asset('images/osaka.png') }} alt="osaka" />
        {{--          importing card           --}}
        <x-card />
    </div>
@endsection
