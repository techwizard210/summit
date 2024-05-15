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
    <div class="content">
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <a class="navbar-brand" href="/admin/home">
                            <b class="logo-icon ps-2">
                                Admin Home
                            </b>
                        </a>
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                                class="ti-menu ti-close"></i></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <ul class="navbar-nav float-start me-auto">
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                    data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-none d-md-block">Add New <i class="fa fa-angle-down"></i></span>
                                    <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><span class="dropdown-item" id="addClueBtn">Add Clue</span></li>
                                    <li><span class="dropdown-item" id="addGroupBtn">Add Group</span></li>
                                </ul>
                            </li>
                            <li class="nav-item search-box">
                                <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                                        class="mdi mdi-magnify fs-4"></i></a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter" />
                                    <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav float-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-bell font-24"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#"
                                    id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="font-24 mdi mdi-comment-processing"></i>
                                </a>
                                <ul class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  "
                                    aria-labelledby="2">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="">
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span
                                                            class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                                class="mdi mdi-calendar text-white fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Event today</h5>
                                                            <span class="mail-desc">Just a reminder that event</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span
                                                            class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                                class="mdi mdi-settings fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Settings</h5>
                                                            <span class="mail-desc">You can customize this
                                                                template</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span
                                                            class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                                class="mdi mdi-account fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Pavan kumar</h5>
                                                            <span class="mail-desc">Just see the my admin!</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span
                                                            class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i
                                                                class="mdi mdi-link fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Luanch Admin</h5>
                                                            <span class="mail-desc">Just see the my new admin!</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-settings me-1 ms-1"></i> Account
                                        Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="ps-4 p-10">
                                        <a href="javascript:void(0)"
                                            class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="pt-5">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                    href="/admin/showClue"><i class="mdi mdi-buffer"></i><span
                                        class="hide-menu">Clues</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                    href="/admin/showGroup"><i class="mdi mdi-terrain fs-4"></i><span
                                        class="hide-menu">Groups</span></a>
                            </li>
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
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{ route('logout') }}" aria-expanded="false"><i
                                        class="mdi mdi-power"></i><span class="hide-menu">Logout</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            @yield('content')
            <footer class="footer text-center">
                All Rights Reserved by <a href="">Summit Team Building</a>. Designed and Developed
                by
                <a href="">Wizard</a>.
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
        <form action="{{}}" method="POST">
            <div class="add-modal-content" style="width: 500px">
                <div class="add-modal-header">
                    <span style="font-size: 25px">Fill the details of new group</span>
                    <span class="add-close" id="addGroupClose">&times;</span>
                </div>
                <div class="add-modal-body">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Group name"
                            name="group_name" required="" />
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

    <div id="addClueModal" class="add-modal">
        <form action="{{}}" method="POST">
            <div class="add-modal-content" style="width: 500px">
                <div class="add-modal-header">
                    <span style="font-size: 25px">Fill the details of new clue</span>
                    <span class="add-close" id="addClueClose">&times;</span>
                </div>
                <div class="add-modal-body">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Title"
                            name="title" required="" />
                    </div>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Point"
                            name="point" required="" />
                    </div>
                    <div class="input-group mt-3">
                        <textarea type="text" class="form-control form-control-lg" placeholder="Description" name="description"
                            required=""></textarea>
                    </div>
                    <div class="input-group mt-3">
                    </div>
                    <span style="font-size:17px">select group name</span>
                    <div class="input-group mt-1" style="flex-wrap: nowrap">
                        <select class="select2 form-select shadow-none select2-hidden-accessible"
                            style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" name="group_id"
                            aria-hidden="true">
                            <option value="AK" data-select2-id="20">Alaska</option>
                            <option value="HI" data-select2-id="21">Hawaii</option>
                            <option value="CA" data-select2-id="23">California</option>
                            <option value="NV" data-select2-id="24">Nevada</option>
                            <option value="OR" data-select2-id="25">Oregon</option>
                            <option value="WA" data-select2-id="26">Washington</option>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <input type="file" name="clue_photo" id="cluePhoto" style="display: none" />
                        <button class="btn btn-outline-primary btn-lg" style="width: 100%"
                            onclick="clickCluePhoto()">
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
</body>
<script>
    $(".select2").select2();
    let msg = <?php echo json_encode(session('msg')); ?>;
    if (msg !== null) {
        $('#notification-container').removeClass("noti-hide");
        $('#notification-container').addClass("noti-show");
        setTimeout(() => {
            $('#notification-container').removeClass("noti-show");
            $('#notification-container').addClass("noti-hide");
        }, 3000);
    }

    function clickCluePhoto() {
        $('#cluePhoto').click();
    }

    $(document).ready(function() {
        var addGroupModal = document.getElementById('addGroupModal');
        var addGroupBtn = document.getElementById('addGroupBtn');
        var addGroupClose = document.getElementById('addGroupClose');
        var addClueModal = document.getElementById('addClueModal');
        var addClueBtn = document.getElementById('addClueBtn');
        var addClueClose = document.getElementById('addClueClose');

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
