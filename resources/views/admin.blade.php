@extends('layouts.home')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <form action="{{ route('admin.browsePhoto') }}" method="POST">
                @csrf
                <div class="home-control-wrapper">
                    <span>Group Name:</span>
                    <select class="custom-select" name="group_id" id="groupName" style="width: 200px">
                        @foreach ($groups as $index => $group)
                            <option value={{ $group['id'] }}>
                                {{ $group['name'] }}</option>
                        @endforeach
                    </select>
                    <span>Team Name:</span>
                    <select class="custom-select" id="teamName" name="user_id" style="width: 200px">
                        @foreach ($users as $index => $user)
                            <option value={{ $user['id'] }}>
                                team {{ $user['team_number'] }} , {{ $user['company_name'] }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-info btn-lg" style="width: 100px" id="to-recover" type="submit">
                        Browse
                    </button>
                </div>
            </form>
            <div class="row el-element-overlay">
                @if (count($photos) > 0)
                    @foreach ($photos as $index => $photo)
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1">
                                        <img src="{{ asset($photo['path']) }}" alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item">
                                                    <a class="
                                      btn
                                      default
                                      btn-outline
                                      image-popup-vertical-fit
                                      el-link
                                    "
                                                        href="{{ asset($photo['path']) }}"><i
                                                            class="mdi mdi-magnify-plus"></i></a>
                                                </li>
                                                <li class="el-item">
                                                    <a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                                                            class="mdi mdi-link"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h4 class="mb-0">Project title</h4>
                                        <span class="text-muted">subtitle of project</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mt-5" style="text-align: center">
                        <h4>No data available</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#groupName').val(<?php echo json_encode($group_id); ?>);
            $('#teamName').val(<?php echo json_encode($user_id); ?>);
        })
    </script>
@endsection
