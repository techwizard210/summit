@extends('layouts.home')

@section('content')
    <div class="container-fluid row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Teams</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Company Name</th>
                                    <th>Team Number</th>
                                    <th>Location</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <form action="{{ route('admin.showLocation') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="location_id" value="{{ $user['id'] }}">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $user['company_name'] }}</td>
                                            <td>{{ $user['team_number'] }}</td>
                                            <td>{{ $user['location_name'] }}</td>
                                            <td style="text-align: center">
                                                <div style=""><button class="btn btn-info" type="submit">
                                                        Edit Location
                                                    </button></div>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <script>
        $("#zero_config").DataTable();
    </script>
@endsection
