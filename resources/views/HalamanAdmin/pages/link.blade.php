@extends('HalamanAdmin/master')

@section('link')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/Admin">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Admin/Link/Show">link</a></li>
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
                                <div>
                                    <a class="btn btn-primary" href="/Admin/CreateLink" role="button">Add New Product</a>
                                </div>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Link</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($links['links'] as $link)
                                        <tr>
                                            <td>{{ $link->id_link }}</td>
                                            <td>{{ $link->name }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-warning" href="/Admin/EditLink/{{ $link->id_link }}"
                                                        role="button">Edit</a>
                                                    <button type="button" class="btn btn-danger">Delete</button>
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
