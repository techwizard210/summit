@extends('layouts.app')

@section('content')
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute"
        data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="#">
                        <b class="logo-icon ps-2">
                            BMQ2
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
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span class="mail-desc">You can customize this template</span>
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
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
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
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <form action="{{ route('downloadFolder') }}" id="downloadFolderForm" method="GET">
                                @csrf
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"
                                    href="#" onclick="document.getElementById('downloadFolderForm').submit()"><i
                                        class="mdi mdi-download"></i><span class="hide-menu">Download
                                        Photos</span></a>
                            </form>
                        </li>
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
            <div class="container-fluid">
                <div class="row el-element-overlay">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img1.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img1.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img2.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img2.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img3.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img3.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img4.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img4.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img1.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img1.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img2.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img2.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img3.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img3.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img4.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img4.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img1.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img1.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img2.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img2.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img3.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img3.jpg') }}"><i
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
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('/template/assets/images/big/img4.jpg') }}" alt="user" />
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
                                                    href="{{ asset('/template/assets/images/big/img4.jpg') }}"><i
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
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        All Rights Reserved by <a href="">Summit Team Building</a>. Designed and Developed
        by
        <a href="">Wizard</a>.
    </footer>
@endsection
