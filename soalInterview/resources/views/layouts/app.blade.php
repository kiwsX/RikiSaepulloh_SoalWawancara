<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url("adminlte/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{url("adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
        <link rel="stylesheet" href="{{url("adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
        <link rel="stylesheet" href="{{url("adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{url("adminlte/dist/css/adminlte.min.css")}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <script src="{{url("adminlte/plugins/jquery/jquery.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/jszip/jszip.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/pdfmake/pdfmake.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/pdfmake/vfs_fonts.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{url("adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
    <script src="{{url("adminlte/dist/js/demo.js")}}"></script>
</html>
