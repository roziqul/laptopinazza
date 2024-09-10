@extends('HalamanAdmin/master')

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Database Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <h3>Edit Category</h3>
                                @foreach ($categories as $categories)
                                <form action="{{ route('CategoryUpdate') }}" method="post" enctype="multipart/form-data">
                                    {{-- <form action="/SaveCategory" method="post" enctype="multipart/form-data">                                   --}}
                                    {{-- <form method="post" action="/Admin/EditCategory/Update"> --}}
                                        @csrf
                                        <input type="hidden" name="ctg_id" value="{{ $categories->ctg_id }}">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="ctg_img" value="{{ url('/img_category/'.$categories->ctg_img) }}" class="form-control" placeholder="Logo" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" name="ctg_name" value="{{ $categories->ctg_name }}" class="form-control" placeholder="Category Name" required="">
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Update Data</button>
                                        </div>
                                    </form>
                                @endforeach
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
