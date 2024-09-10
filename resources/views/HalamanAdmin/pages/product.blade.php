@extends('HalamanAdmin/master')

@section('link')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/Admin">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Admin/Product/Show">product</a></li>
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
                                    <a class="btn btn-primary" href="/Admin/CreateProduct" role="button">Add New Product</a>
                                </div>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Warranty</th>
                                        <th>Processor</th>
                                        <th>Memory</th>
                                        <th>Storage</th>
                                        <th>VGA</th>
                                        <th>Display</th>
                                        <th>Operating System</th>
                                        <th>Menu &nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products['products'] as $prd)
                                        <tr>
                                            <td>{{ $prd->id_prd }}</td>
                                            <td>{{ $prd->ctg_id }}</td>
                                            <td><img width="200px" height="160px" src="{{ url('/img_prd/'.$prd->img_prd) }}"></td>
                                            <td>{{ $prd->nama_prd }}</td>
                                            <td>Rp. {{ $prd->hrg_prd }}</td>
                                            <td>{{ $prd->garansi_prd }}</td>
                                            <td>{{ $prd->processor_prd }}</td>
                                            <td>{{ $prd->memory_prd }}</td>
                                            <td>{{ $prd->storage_prd }}</td>
                                            <td>{{ $prd->graphic_prd }}</td>
                                            <td>{{ $prd->display_prd }}</td>
                                            <td>{{ $prd->os_prd }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-warning" href="/Admin/EditProduct/{{ $prd->id_prd }}" role="button">Edit</a>
                                                    <a class="btn btn-danger" href="/Admin/DeleteProduct/{{ $prd->id_prd }}" role="button">Delete</a>
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
