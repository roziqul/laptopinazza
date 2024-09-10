<!DOCTYPE html>
<html lang="en">

<head>
    @include('HalamanAdmin/partials/head')
    @stack('head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('HalamanAdmin/partials/navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('HalamanAdmin/partials/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('link')
            </section>
            <!-- Main content -->
            @include('sweetalert::alert')
            @yield('isi')
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        @include('HalamanAdmin/partials/footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('HalamanAdmin/partials/scripts')
    @stack('scripts')
</body>

</html>
