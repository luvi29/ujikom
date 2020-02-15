@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Barang</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('barang.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Kitab</label>
                                <input class="form-control" type="text" name="nama_kitab" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Satuan</label>
                                <input class="form-control" type="text" name="harga_satuan" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Stok Kitab</label>
                                <input class="form-control" type="text" name="stok_kitab" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
