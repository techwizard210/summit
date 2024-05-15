@extends('layouts.home')

@section('content')
    <div class="page-wrapper">
        <div class="home">
            <div class="home_wrapper">
                <form id="uploadForm" action="{{ route('uploadPhoto') }}" method="post" enctype="multipart/form-data">
                    <input type="file" name="photo" id="cameraPhoto" accept="image/*" capture="environment"
                        style="display:none;">
                    <input type="hidden" name="clue_id" id="clue_id">
                    @csrf

                    @foreach ($clues as $clue)
                        <div class="card_wrapper">
                            <x-card :title="$clue['title']" :point="$clue['point']" :description="$clue['description']" :imgUrl="$clue['image_path']" :clueId="$clue['id']"
                                :path="$clue['path']" />
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    @endsection
