@extends('layouts.home')

@section('content')
    <div class="container-fluid row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Groups</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Group Name</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($groups as $index => $group)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $group['name'] }}</td>
                                        <td style="text-align: center"><button class="btn btn-info" style="margin-right:5px"
                                                id="to-recover"
                                                onclick="editGroup({{ $group['id'] }}, {{ json_encode($group['name']) }})">
                                                Edit
                                            </button><button class="btn btn-danger" style="" id="to-recover"
                                                onclick="deleteGroup({{ $group['id'] }}, {{ json_encode($group['name']) }})">
                                                Delete
                                            </button></td>
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
