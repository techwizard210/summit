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
                <form class="form-horizontal mt-3" id="sign_in_form" action="{{ route('authenticate') }}" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white h-100" id="basic-addon1"><i
                                            class="mdi mdi-account fs-4"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Company Name"
                                    required="" name="company_name" />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white h-100" id="basic-addon2"><i
                                            class="mdi mdi-numeric fs-4"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Team Number"
                                    name="team_number" required="" />
                            </div>
                            <div class="input-group mb-3" style="flex-wrap: nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white h-100" id="basic-addon2"><i
                                            class="mdi mdi-terrain fs-4"></i></span>
                                </div>
                                <select class="custom-select" name="group_id">
                                    @foreach ($groups as $index => $group)
                                        <option value={{ $group['id'] }}>
                                            {{ $group['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-info text-white h-100" id="basic-addon2"><i
                                            class="mdi mdi-lock fs-4"></i></span>
                                </div>
                                <input type="password" class="form-control form-control-lg" placeholder="Password"
                                    name="password" required="" />
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3">
                                    <button class="btn btn-info btn-lg" style="width: 100%" id="to-recover" type="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <a href="/signup"
                                style="border-bottom: 1px dashed black; float: right; text-decoration:none;color:black">
                                To register
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // let groups = <?php echo json_encode($groups); ?>;
        // groups.forEach(element => {
        //     let elem = "<option value=" + element.id + " data-select2-id=" + element.id + ">" + element.name +
        //         "</option>";
        //     $('#group-select').append(elem);
        // });
    </script>
@endsection
