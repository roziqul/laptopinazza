@extends('HalamanAdmin/master')

@section('link')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/Admin">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Admin/Category/Show">category</a></li>
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
                                    <a class="btn btn-primary" href="/Admin/CreateCategory" role="button">Add New Category</a>
                                </div>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Logo</th>
                                        <th>Category</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories['categories'] as $categories)
                                        <tr>
                                            <td>{{ $categories->ctg_id }}</td>
                                            <td><img width="200px" height="160px" src="{{ url('/img_category/'.$categories->ctg_img) }}"></td>
                                            <td>{{ $categories->ctg_name }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-warning" href="/Admin/EditCategory/{{ $categories->ctg_id }}" role="button">Edit</a>
                                                    <a class="btn btn-danger" href="/Admin/DeleteCategory/{{ $categories->ctg_id }}" role="button">Delete</a>
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
