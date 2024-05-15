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
        @yield('content')
    </div>
    </div>
    </div>
    <div class="notification-container noti-hide" id="notification-container">
        <div class="notification-msg">
            {{ session('msg') }}
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $(".select2").select2();
    });
    let msg = <?php echo json_encode(session('msg')); ?>;
    if (msg !== null) {
        $('#notification-container').removeClass("noti-hide");
        $('#notification-container').addClass("noti-show");
        setTimeout(() => {
            $('#notification-container').removeClass("noti-show");
            $('#notification-container').addClass("noti-hide");
        }, 3000);
    }
</script>

</html>
