@extends('HalamanAdmin/master')

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                <form action="{{ route('CategorySave') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="ctg_img">Brand Logo</label>
                                        <input type="file" class="form-control" id="ctg_img" placeholder="Image" name="ctg_img">
                                    </div>
                                    <div class="form-group">
                                        <label for="ctg_name">Brand Name</label>
                                        <input type="text" class="form-control" id="ctg_name" placeholder="Category Name" name="ctg_name">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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