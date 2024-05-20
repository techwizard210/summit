@extends('layouts.home')

@section('content')
    <div class="container-fluid row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <form action="{{ route('admin.saveLocation') }}" method="POST">
                    @csrf
                    <input type="hidden" name="checkArr" />
                    <input type="hidden" name="currentUserId" value="{{ $user['id'] }}" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $user['company_name'] }}, team {{ $user['team_number'] }}</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Location Name</th>
                                        <th style="text-align: center">Passive/Active</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sorted_groups as $index => $group)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $group['name'] }}</td>
                                            <td style="text-align: center"><label class="location-switch">
                                                    <input type="checkbox" <?php echo $group['checked'] == true ? 'checked' : ''; ?>
                                                        onclick="toggleLocation({{ $group['id'] - 1 }})">
                                                    <span class="location-slider location-round"></span>
                                                </label></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="text-align: right"><button class="btn btn-lg btn-info" type="submit">
                                Save
                            </button></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <script>
        let sorted_groups = <?php echo json_encode($sorted_groups); ?>;
        let checkArr = [];
        sorted_groups.forEach(group => {
            checkArr.push(group.checked);
        });
        $('input[name=checkArr]').val(checkArr);

        function toggleLocation(location_id) {
            checkArr[location_id] = !checkArr[location_id];
            $('input[name=checkArr]').val(checkArr);
        }
    </script>
@endsection
