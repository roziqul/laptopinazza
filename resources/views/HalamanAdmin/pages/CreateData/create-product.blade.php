@extends('HalamanAdmin/master')

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('ProductSave') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control select2" style="width: 100%;" name="ctg_id">
                                            <option value="">Choose Category</option>
                                            @foreach ($categories['categories'] as $item)
                                                <option value="{{ $item->ctg_id }}">{{ $item->ctg_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="img_prd">Image</label>
                                        <input type="file" class="form-control" id="img_prd" placeholder="Image" name="img_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_prd">Name</label>
                                        <input type="text" class="form-control" id="nama_prd" placeholder="Name" name="nama_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="hrg_prd">Price</label>
                                        <input type="text" class="form-control" id="hrg_prd" placeholder="Price" name="hrg_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="garansi_prd">Warranty</label>
                                        <input type="text" class="form-control" id="garansi_prd" placeholder="Warranty" name="garansi_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="processor_prd">Processor</label>
                                        <input type="text" class="form-control" id="processor_prd" placeholder="Processor" name="processor_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="memory_prd">RAM Memory</label>
                                        <input type="text" class="form-control" id="memory_prd" placeholder="RAM Memory" name="memory_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="storage_prd">Storage</label>
                                        <input type="text" class="form-control" id="storage_prd" placeholder="Storage" name="storage_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="graphic_prd">VGA</label>
                                        <input type="text" class="form-control" id="graphic_prd" placeholder="VGA" name="graphic_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="display_prd">Display</label>
                                        <input type="text" class="form-control" id="display_prd" placeholder="Display" name="display_prd">
                                    </div>
                                    <div class="form-group">
                                        <label for="os_prd">Operating System</label>
                                        <input type="text" class="form-control" id="os_prd" placeholder="Operating System" name="os_prd">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Confirm New Product</button>
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
