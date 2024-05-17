@extends('layouts.home')

@section('content')
    <div class="container-fluid row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clues</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Location Name</th>
                                    <th>Title</th>
                                    <th>Value</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clues as $index => $clue)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $clue['group']['name'] }}</td>
                                        <td>{{ $clue['title'] }}</td>
                                        <td>{{ $clue['point'] }}</td>
                                        <td>{{ $clue['description'] }}</td>
                                        <td style="text-align: center">
                                            @if (strlen($clue['image_path']) > 2)
                                                <img src={{ asset($clue['image_path']) }} style="width: 100px"
                                                    alt="image_path" />
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            <div style="display: flex;justify-content:center"><button class="btn btn-info" style="margin-right:5px"
                                                    id="to-recover"
                                                    onclick="editClue({{ $clue['id'] }},{{ $clue['group']['id'] }}, {{ json_encode($clue['title']) }}, {{ $clue['point'] }},{{ json_encode($clue['description']) }}, {{ json_encode($clue['image_path']) }}) ">
                                                    Edit
                                                </button><button class="btn btn-danger" style="" id="to-recover"
                                                    onclick="deleteClue({{ $clue['id'] }}, {{ json_encode($clue['title']) }})">
                                                    Delete
                                                </button></div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#zero_config").DataTable();
    </script>
@endsection
