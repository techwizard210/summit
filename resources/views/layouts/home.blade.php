<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Summit</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/svg/logo.svg') }}" />

    <link rel="stylesheet" href="{{ asset('/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/template/assets/libs/select2/dist/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/template/assets/libs/jquery-minicolors/jquery.minicolors.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/template/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/template/assets/libs/quill/dist/quill.snow.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/template/assets/extra-libs/multicheck/multicheck.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/template/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
    <link href="{{ asset('/template/dist/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/template/assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet" />

    <script src="{{ asset('/template/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('/template/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('/template/dist/js/waves.js') }}"></script>
    <script src="{{ asset('/template/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('/template/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('/template/dist/js/pages/mask/mask.init.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/template/assets/libs/magnific-popup/meg.init.js') }}"></script>
    <script src="{{ asset('/template/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('/template/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('/template/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    @if (Auth::user()->id == 1)
                        <a class="navbar-brand" href="/admin/home">
                            <b class="logo-icon ps-2">
                                Admin Home
                            </b>
                        </a>
                    @else
                        <a class="navbar-brand" href="#">
                            <b class="logo-icon ps-2">
                                {{ Session::get('group_name') }}
                            </b>
                        </a>
                    @endif
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                        @if (Auth::user()->id == 1)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-none d-md-block">Add New <i class="fa fa-angle-down"></i></span>
                                    <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><span class="dropdown-item" id="addUserBtn">Add Team</span></li>
                                    <li><span class="dropdown-item" id="addClueBtn">Add Clue</span></li>
                                    <li><span class="dropdown-item" id="addGroupBtn">Add Location</span></li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="mdi mdi-magnify fs-4"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-5">
                        @if (Auth::user()->id == 1)
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                    href="/admin/showTeam"><i class="mdi mdi-account-multiple"></i><span
                                        class="hide-menu">Teams</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                    href="/admin/showClue"><i class="mdi mdi-buffer"></i><span
                                        class="hide-menu">Clues</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                    href="/admin/showGroup"><i class="mdi mdi-terrain fs-4"></i><span
                                        class="hide-menu">Locations</span></a>
                            </li>
                        @endif
                        @if (Auth::user()->id == 1)
                            <li class="sidebar-item">
                                <form action="{{ route('admin.downloadFolder') }}" id="adminDownloadFolder"
                                    method="POST">
                                    @csrf
                                    <input name="download_user_id" type="hidden" value="<?php echo isset($user_id) ? $user_id : ''; ?>" />
                                    <input name="download_group_id" type="hidden" value="<?php echo isset($group_id) ? $group_id : ''; ?>" />
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                        href="#"
                                        onclick="document.getElementById('adminDownloadFolder').submit()"><i
                                            class="mdi mdi-download"></i><span class="hide-menu">Download
                                            Photos</span></a>
                                </form>
                            </li>
                        @else
                            <li class="sidebar-item">
                                <form action="{{ route('downloadFolder') }}" id="downloadFolderForm" method="GET">
                                    @csrf
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                        href="#"
                                        onclick="document.getElementById('downloadFolderForm').submit()"><i
                                            class="mdi mdi-download"></i><span class="hide-menu">Download
                                            Photos</span></a>
                                </form>
                            </li>
                        @endif
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
                                aria-expanded="false"><i class="mdi mdi-power"></i><span
                                    class="hide-menu">Logout</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            @yield('content')
            <footer class="footer text-center">
                All Rights Reserved by <a href="">Summit Team Building</a>
            </footer>
        </div>
    </div>
    </div>
    <div class="notification-container noti-hide" id="notification-container">
        <div class="notification-msg">
            {{ session('msg') }}
        </div>
    </div>

    <div id="addGroupModal" class="add-modal">
        <form action="{{ route('admin.addGroup') }}" method="POST">
            @csrf
            <div class="add-modal-content" style="width: 500px">
                <div class="add-modal-header">
                    <span style="font-size: 25px">Fill the details of new Location</span>
                    <span class="add-close" id="addGroupClose">&times;</span>
                </div>
                <div class="add-modal-body">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Location name"
                            name="group_name" required />
                    </div>
                </div>
                <div class="add-modal-footer">
                    <button class="btn btn-info" type="submit">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div id="editGroupModal" class="add-modal">
        <form action="{{ route('admin.editGroup') }}" method="POST">
            @csrf
            <input name="edit_group_id" type="hidden" />
            <div class="add-modal-content" style="width: 500px">
                <div class="add-modal-header">
                    <span style="font-size: 25px">Edit the details of location</span>
                    <span class="add-close" onclick="editGroupModalClose()">&times;</span>
                </div>
                <div class="add-modal-body">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Location name"
                            name="edit_group_name" required />
                    </div>
                </div>
                <div class="add-modal-footer">
                    <button class="btn btn-info" type="submit">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div id="addClueModal" class="add-modal">
        <form action="{{ route('admin.addClue') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="add-modal-content" style="width: 500px">
                <div class="add-modal-header">
                    <span style="font-size: 25px">Fill the details of new clue</span>
                    <span class="add-close" id="addClueClose">&times;</span>
                </div>
                <div class="add-modal-body">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Title"
                            name="title" required />
                    </div>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Point"
                            name="point" required />
                    </div>
                    <div class="input-group mt-3">
                        <textarea type="text" class="form-control form-control-lg" placeholder="Description" name="description" required></textarea>
                    </div>
                    <div class="input-group mt-3">
                    </div>
                    <span style="font-size:17px">select location name</span>
                    <div class="input-group mt-1" style="flex-wrap: nowrap">
                        <select class="custom-select" name="group_id">
                            @foreach ($groups as $index => $group)
                                <option value={{ $group['id'] }}>
                                    {{ $group['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <input type="file" name="clue_photo" id="cluePhoto" accept="image/*"
                            style="display: none" />
                        <button type="button" class="btn btn-outline-primary btn-lg" style="width: 100%"
                            onclick="clickCluePhoto(event)">
                            Upload Clue Photo
                        </button>
                    </div>
                </div>
                <div class="add-modal-footer">
                    <button class="btn btn-info" type="submit">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div id="editClueModal" class="add-modal">
        <form action="{{ route('admin.editClue') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="edit_clue_id" />
            <div class="add-modal-content" style="width: 500px">
                <div class="add-modal-header">
                    <span style="font-size: 25px">Edit the details of the clue</span>
                    <span class="add-close" onclick="editClueModalClose()">&times;</span>
                </div>
                <div class="add-modal-body">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Title"
                            name="edit_title" required />
                    </div>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Point"
                            name="edit_point" required />
                    </div>
                    <div class="input-group mt-3">
                        <textarea type="text" class="form-control form-control-lg" placeholder="Description" name="edit_description"
                            required></textarea>
                    </div>
                    <div class="input-group mt-3">
                    </div>
                    <span style="font-size:17px">select location name</span>
                    <div class="input-group mt-1" style="flex-wrap: nowrap">
                        <select class="custom-select" name="edit_group_id">
                            @foreach ($groups as $index => $group)
                                <option value={{ $group['id'] }}>
                                    {{ $group['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mt-3">
                    </div>
                    <span style="font-size:17px">click the image to change</span>
                    <div class="input-group mt-3"
                        style="justify-content: center;border: 1px solid #cdc9c9;padding: 5px;border-radius: 3px;">
                        <input type="file" name="edit_clue_photo" style="display: none" />
                        <img src="" id="edit_img" style="width: 200px;cursor: pointer;"
                            onclick="editClueImg(event)" />
                    </div>
                </div>
                <div class="add-modal-footer">
                    <button class="btn btn-info" type="submit">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div id="deleteClueModal" class="add-modal">
        <form action="{{ route('admin.deleteClue') }}" method="POST">
            @csrf
            <input name="delete_clue_id" type="hidden" />
            <div class="add-modal-content" style="width: 500px">
                <div class="delete-modal-header">
                    <span>Are you sure want to delete " </span> <span id="delete_clue_title"><b></b></span><span> "
                        ?</span>
                </div>
                <div class="delete-modal-footer">
                    <button class="btn btn-light" onclick="closeDeleteClue(event)">
                        Cancel
                    </button>
                    <button class="btn btn-danger" type="submit">
                        OK
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div id="deleteGroupModal" class="add-modal">
        <form action="{{ route('admin.deleteGroup') }}" method="POST">
            @csrf
            <input type="hidden" name="delete_group_id">
            <div class="add-modal-content" style="width: 500px">
                <div class="delete-modal-header">
                    <span>Are you sure want to delete " </span> <span id="delete_group_title"><b></b></span><span> "
                        ?</span>
                </div>
                <div class="delete-modal-footer">
                    <button class="btn btn-light" onclick="closeDeleteGroup(event)">
                        Cancel
                    </button>
                    <button class="btn btn-danger" type="submit">
                        OK
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div id="addUserModal" class="add-modal">
        <form action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="add-modal-content" style="width: 500px">
                <div class="add-modal-header">
                    <span style="font-size: 25px">Fill the details of new team</span>
                    <span class="add-close" onclick="closeAddUserModal()">&times;</span>
                </div>
                <div class="add-modal-body">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Company Name"
                            name="company_name" required />
                    </div>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Team Number"
                            name="team_number" required />
                    </div>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control form-control-lg" placeholder="Password"
                            name="password" required="" />
                    </div>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control form-control-lg"
                            placeholder="Password Confirmation" name="re_password" required="" />
                    </div>
                </div>
                <div class="add-modal-footer">
                    <button class="btn btn-info" type="submit">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    let msg = <?php echo json_encode(session('msg')); ?>;
    if (msg !== null) {
        $('#notification-container').removeClass("noti-hide");
        $('#notification-container').addClass("noti-show");
        setTimeout(() => {
            $('#notification-container').removeClass("noti-show");
            $('#notification-container').addClass("noti-hide");
        }, 3000);
    }

    function clickCluePhoto(event) {
        event.preventDefault();
        $('#cluePhoto').click();
    }

    function editGroup(group_id, group_name) {
        $('input[name=edit_group_id]').val(group_id);
        $('input[name=edit_group_name]').val(group_name);
        editGroupModal.style.display = "block";
    }

    function editClue(clue_id, group_id, title, point, description, image_path) {
        $('input[name=edit_clue_id]').val(clue_id);
        $('select[name=edit_group_id]').val(group_id);
        $('input[name=edit_title]').val(title);
        $('input[name=edit_point]').val(point);
        $('textarea[name=edit_description]').val(description);

        let path = '';
        if (image_path == '') {
            path = {!! json_encode(url('/')) !!} + '/assets/images/sketch.jpg';
        } else {
            path = {!! json_encode(url('/')) !!} + '/' + image_path;
        }

        $('#edit_img').attr('src', path);
        editClueModal.style.display = "block";
    }

    function editClueModalClose() {
        editClueModal.style.display = "none";
    }

    function editGroupModalClose() {
        editGroupModal.style.display = "none";
    }

    function closeDeleteClue(event) {
        event.preventDefault();
        deleteClueModal.style.display = 'none';
    }

    function closeDeleteGroup(event) {
        event.preventDefault();
        deleteGroupModal.style.display = 'none';
    }

    function closeAddUserModal() {
        addUserModal.style.display = 'none';
    }

    function editClueImg() {
        event.preventDefault();
        $('input[name=edit_clue_photo]').click();
    }

    function deleteClue(clue_id, title) {
        $('input[name=delete_clue_id]').val(clue_id);
        $('#delete_clue_title').text(title);
        deleteClueModal.style.display = 'block';
    }

    function deleteGroup(group_id, group_name) {
        $('input[name=delete_group_id]').val(group_id);
        $('#delete_group_title').text(group_name);
        deleteGroupModal.style.display = 'block';
    }

    $('input[name=edit_clue_photo]').on('change', function(event) {
        let file = event.target.files[0];

        if (file) {
            let reader = new FileReader();

            reader.onload = function(e) {
                console.log('object');
                $('#edit_img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    $(document).ready(function() {
        var addGroupModal = document.getElementById('addGroupModal');
        var editGroupModal = document.getElementById('editGroupModal');
        var deleteGroupModal = document.getElementById('deleteGroupModal');
        var addGroupBtn = document.getElementById('addGroupBtn');
        var addGroupClose = document.getElementById('addGroupClose');

        var addClueModal = document.getElementById('addClueModal');
        var editClueModal = document.getElementById('editGroupModal');
        var deleteClueModal = document.getElementById('deleteClueModal');
        var addClueBtn = document.getElementById('addClueBtn');
        var addClueClose = document.getElementById('addClueClose');

        var addUserModal = document.getElementById('addUserModal');
        var addUserBtn = document.getElementById('addUserBtn');

        addGroupBtn.onclick = function() {
            addGroupModal.style.display = "block";
        }

        addGroupClose.onclick = function() {
            addGroupModal.style.display = "none";
        }

        addClueBtn.onclick = function() {
            addClueModal.style.display = "block";
        }

        addClueClose.onclick = function() {
            addClueModal.style.display = "none";
        }

        addUserBtn.onclick = function() {
            addUserModal.style.display = "block";
        }

        window.onclick = function(event) {
            if (event.target == addGroupModal) {
                addGroupModal.style.display = "none";
            }

            if (event.target == addClueModal) {
                addClueModal.style.display = "none";
            }
        }
    });
</script>

</html>
