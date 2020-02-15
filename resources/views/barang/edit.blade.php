@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Edit Data Barang</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('barang.update', $barang->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Kitab</label>
                                <input class="form-control" type="text" name="nama_kitab" id="" value="{{$barang->nama_kitab}}">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Satuan</label>
                                <input class="form-control" type="text" name="harga_satuan" id="" value="{{$barang->harga_satuan}}">
                            </div>
                            <div class="form-group">
                                <label for="">Stok Barang</label>
                                <input class="form-control" type="text" name="stok_barang" id="" value="{{$barang->stok_kitab}}">
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
