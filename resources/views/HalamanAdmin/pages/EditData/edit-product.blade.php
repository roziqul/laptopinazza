@extends('HalamanAdmin/master')

@section('isi')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <h3>Edit Product</h3>
                                @foreach ($products as $prd)
                                <form action="{{ route('ProductUpdate') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_prd" value="{{ $prd->id_prd }}">
                                        <div class="form-group">
                                            <label>Product Category</label>
                                            <input type="text" name="ctg_id" value="{{ $prd->ctg_id }}"
                                                class="form-control" placeholder="Product Category" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control select2" style="width: 100%;" name="ctg_id">
                                                <option value="">Choose Category</option>
                                                @foreach ($categories as $item)
                                                    @if ($item->ctg_id == $prd->ctg_id)
                                                        <option value="{{ $prd->ctg_id }}" selected>{{ $item->ctg_name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $item->ctg_id }}">{{ $item->ctg_name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img_prd" value="{{ url('/img_prd/'.$prd->img_prd) }}" class="form-control" placeholder="Image" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="nama_prd" value="{{ $prd->nama_prd }}" class="form-control" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="hrg_prd" value="{{ $prd->hrg_prd }}" class="form-control" placeholder="Price" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Warranty</label>
                                            <input type="text" name="garansi_prd" value="{{ $prd->garansi_prd }}" class="form-control" placeholder="Warranty" required="">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="garansi_prd">Warranty</label>
                                            <select class="form-control select2" style="width: 100%;" name="garansi_prd">
                                                <option value="{{ $prd->garansi_prd }}">{{ $prd->garansi_prd }}</option>
                                                    <option value="1 Tahun DISTRIBUTOR">1 Tahun DISTRIBUTOR</option>
                                                    <option value="">-------------------------------</option>
                                                    <option value="1 Tahun RESMI">1 Tahun RESMI</option>
                                                    <option value="2 Tahun RESMI">2 Tahun RESMI</option>
                                                    <option value="3 Tahun RESMI">3 Tahun RESMI</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Processor</label>
                                            <input type="text" name="processor_prd" value="{{ $prd->processor_prd }}" class="form-control" placeholder="Processor" required="">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="processor_prd">Processor</label>
                                            <select class="form-control select2" style="width: 100%;" name="processor_prd">
                                                <option value="{{ $prd->processor_prd }}">{{ $prd->processor_prd }}</option>
                                                    <option>--------------- INTEL PROCESSOR ---------------</option>
                                                    <option value="Intel Core i5 10300H">Intel Core i5 10300H</option>
                                                    <option value="Intel Core i5 10400H">Intel Core i5 10400H</option>
                                                    <option value="Intel Core i5 10500H">Intel Core i5 10500H</option>
                                                    <option value="Intel Core i5 11300H">Intel Core i5 11300H</option>
                                                    <option value="Intel Core i5 11400H">Intel Core i5 11400H</option>
                                                    <option value="Intel Core i7 11700H">Intel Core i7 11700H</option>
                                                    <option value="Intel Core i7 11800H">Intel Core i7 11800H</option>
                                                    <option value="Intel Core i9 11900H">Intel Core i9 11900H</option>
                                                    <option>--------------- AMD PROCESSOR ---------------</option>
                                                    <option value="AMD Ryzen 5 4600H">AMD Ryzen 5 4600H</option>                                               
                                                    <option value="AMD Ryzen 7 4800H">AMD Ryzen 7 4800H</option>
                                                    <option value="AMD Ryzen 5 5600H">AMD Ryzen 5 5600H</option>
                                                    <option value="AMD Ryzen 7 5800H">AMD Ryzen 7 5800H</option>
                                                    <option value="AMD Ryzen 9 5900HX">AMD Ryzen 9 5900HX</option>
                                                    <option value="AMD Ryzen 5 6600H">AMD Ryzen 5 6600H</option>
                                                    <option value="AMD Ryzen 7 6800H">AMD Ryzen 7 6800H</option>
                                                    <option value="AMD Ryzen 9 6900HX">AMD Ryzen 9 6900HX</option>
                                            </select>
                                        </div>     --}}
                                        <div class="form-group">
                                            <label>Memory</label>
                                            <input type="text" name="memory_prd" value="{{ $prd->memory_prd }}" class="form-control" placeholder="Memory" required="">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="memory_prd">RAM Memory</label>
                                            <select class="form-control select2" style="width: 100%;" name="memory_prd">
                                                <option value="{{ $prd->memory_prd }}">{{ $prd->memory_prd }}</option>
                                                    <option value="8 GB Single Channel">8 GB Single Channel</option>
                                                    <option value="16 GB Dual Channel">16 GB Dual Channel</option>
                                                    <option value="16 GB Single Channel">16 GB Single Channel</option>
                                                    <option value="32 GB Dual Channel">32 GB Dual Channel</option>
                                                    <option value="32 GB Dual Channel">32 GB Single Channel</option>
                                                    <option value="32 GB Dual Channel">64 GB Dual Channel</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Storage</label>
                                            <input type="text" name="storage_prd" value="{{ $prd->storage_prd }}" class="form-control" placeholder="Storage" required="">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="storage_prd">Storage</label>
                                            <select class="form-control select2" style="width: 100%;" name="storage_prd">
                                                <option value="{{ $prd->storage_prd }}">{{ $prd->storage_prd }}</option>
                                                    <option value="256 GB SSD NVME M.2">256 GB SSD NVME M.2</option>
                                                    <option value="512 GB SSD NVME M.2">512 GB SSD NVME M.2</option>
                                                    <option value="1 TB SSD NVME M.2">1 TB SSD NVME M.2</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>VGA</label>
                                            <input type="text" name="graphic_prd" value="{{ $prd->graphic_prd }}" class="form-control" placeholder="VGA" required="">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="graphic_prd">VGA</label>
                                            <select class="form-control select2" style="width: 100%;" name="graphic_prd">
                                                <option value="{{ $prd->graphic_prd }}">{{ $prd->graphic_prd }}</option>
                                                    <option value="GTX 1650 4GB">GTX 1650 4GB</option>
                                                    <option value="GTX 1650 Ti Max-Q 4GB">GTX 1650 Ti Max-Q 4GB</option>
                                                    <option value="GTX 1650 Ti 4GB">GTX 1650 Ti 4GB</option>
                                                    <option value="RTX 3050 4GB">RTX 3050 4GB</option>
                                                    <option value="RTX 3050 Ti 4GB">RTX 3050 Ti 4GB</option>
                                                    <option value="RTX 3060 6GB">RTX 3060 6GB</option>
                                                    <option value="RTX 3070 8GB">RTX 3070 8GB</option>
                                                    <option value="RTX 3070 Ti 8GB">RTX 3070 Ti 8GB</option>
                                                    <option value="RTX 3080 8GB">RTX 3080 8GB</option>
                                                    <option value="RTX 3080 16GB">RTX 3080 16GB</option>
                                                    <option value="RTX 3080 Ti 16GB">RTX 3080 Ti 16GB</option>                                                                                          
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Display</label>
                                            <input type="text" name="display_prd" value="{{ $prd->display_prd }}" class="form-control" placeholder="Display" required="">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="display_prd">Display</label>
                                            <select class="form-control select2" style="width: 100%;" name="display_prd">
                                                <option value="{{ $prd->display_prd }}">{{ $prd->display_prd }}</option>
                                                    <option value="15'6 Inch FULL HD">15'6 Inch FULL HD</option>
                                                    <option value="15'6 Inch 2K">15'6 Inch 2K</option>
                                                    <option value="15'6 Inch 2K 100% sRGB">15'6 Inch 2K 100% sRGB</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Operating System</label>
                                            <input type="text" name="os_prd" value="{{ $prd->os_prd }}" class="form-control" placeholder="Operating System" required="">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="os_prd">Operating System</label>
                                            <select class="form-control select2" style="width: 100%;" name="os_prd">
                                                <option value="{{ $prd->os_prd }}">{{ $prd->os_prd }}</option>
                                                    <option value="Windows 10 Home">Windows 10 Home</option>
                                                    <option value="Windows 10 Home + Office 2019">Windows 10 Home + Office 2019</option>
                                                    <option value="Windows 11">Windows 11</option>
                                            </select>
                                        </div> --}}
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
