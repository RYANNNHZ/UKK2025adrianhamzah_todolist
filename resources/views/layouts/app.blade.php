<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ !$title ? config('app.name') : $title }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
        @livewireStyles
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <x-sidebar.sidebar></x-sidebar>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <x-navbar title="{{ $title }}" ></x-navbar>
                <!-- Page content-->
                <div class="container-fluid">
                    {{$slot}}
                </div>
            </div>
        </div>
        @livewireScripts
        @stack('scripts')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
    </body>
</html>
