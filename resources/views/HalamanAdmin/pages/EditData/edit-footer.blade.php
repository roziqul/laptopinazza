@extends('HalamanAdmin/master')

@section('link')
    <a href="/Admin/EditFooter">footer</a>
@endsection

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Footer</h3>
                        </div>
                        @foreach ($footer as $f)
                            <form action="/Admin/EditFooter" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="card-body">
                                        <input type="hidden" name="id" value="{{ $f->id }}">
                                        <div class="form-group mb-3">
                                            <label for="aboutus">About Us</label>
                                            <textarea class="form-control" id="aboutus" placeholder="Isikan About Us"
                                                name="aboutUs">{{ $f->about_us }}</textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" id="address" placeholder="Isikan Address"
                                                name="address">{{ $f->address }}</textarea>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                            </form>
                        @endforeach
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
