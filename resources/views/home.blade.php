@extends('layouts.app')

@section('content')
    <div class="home">
        <div class="home_wrapper">
            <header>
                <h1>BMQ2</h1>
                <a href="{{ route('logout') }}"><img src="{{ asset('/assets/svg/power-off-svgrepo-com.svg') }}"
                        alt=""></a>
            </header>
            <div class="card_wrapper">
                <form id="uploadForm" action="{{ route('uploadPhoto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="photo" id="cameraPhoto" accept="image/*" capture="environment"
                        style="display:none;">
                    <input type="hidden" name="clue_id" id="clue_id">
                    @foreach ($clues as $clue)
                        <x-card :title="$clue['title']" :subTitle="$clue['subTitle']" :imgUrl="$clue['imgUrl']" :clueId="$clue['id']" :path="$clue['path']" />
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection
