@extends('HalamanAdmin/master')

@section('link')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/Admin">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Admin/Footer/Show">footer</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>About Us</th>
                                        <th>Address</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($footer['footer'] as $f)
                                        <tr>
                                            <td>{{ $f->id }}</td>
                                            <td>{{ $f->about_us }}</td>
                                            <td>{{ $f->address }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-warning" href="/Admin/EditFooter"
                                                        role="button">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
