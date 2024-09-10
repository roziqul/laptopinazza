@extends('HalamanAdmin/master')

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Link</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @foreach ($links as $link)
                                <form action="/Admin/EditLink/Update" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <input type="hidden" name="id_link" value="{{ $link->id_link }}">
                                        <div class="form-group">
                                            <label for="link_name">Link Name</label>
                                            <input type="text" class="form-control" id="link_name" placeholder="Link Name"
                                                name="nameLink" value="{{ $link->name }}">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            @endforeach
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