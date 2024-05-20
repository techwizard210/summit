@extends('layouts.app')

@section('content')
    <div class="
          auth-wrapper
          no-block
        ">
        <div class="auth-box border-secondary">
            <div id="loginform">
                <div class="text-center pt-3 pb-3">
                    <span class="db"><img src="{{ asset('/assets/svg/logo.svg') }}" alt="logo" /></span>
                </div>
                <form class="form-horizontal mt-3" id="sign_in_form" action="{{ route('goHome') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            @if (count($groups) > 0)
                                <div class="input-group mb-3" style="justify-content: center">
                                    Please select a location
                                </div>
                                <div class="input-group mb-3" style="flex-wrap: nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white h-100" id="basic-addon2"><i
                                                class="mdi mdi-terrain fs-4"></i></span>
                                    </div>
                                    <select class="custom-select" name="group_id">
                                        @foreach ($groups as $index => $group)
                                            <option value={{ $group[0]['id'] }}>
                                                {{ $group[0]['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <div class="input-group mb-3" style="justify-content: center">
                                    You don't have any location
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3">
                                    <button class="btn btn-info btn-lg" style="width: 100%" id="to-recover" type="submit">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
