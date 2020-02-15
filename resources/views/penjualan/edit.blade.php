@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Edit Data Penjualan</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('penjualan.update', $penjualan->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">No Nota</label>
                                <input class="form-control" type="text" name="no_nota" id="" value="{{$penjualan->no_nota}}">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Nota</label>
                                <input class="form-control" type="date" name="tgl_nota" id="" value="{{$penjualan->tgl_nota}}">
                            </div>
                            <div class="form-group">
                                <label for="">Total Bayar</label>
                                <input class="form-control" type="text" name="total_bayar" id="" value="{{$penjualan->total_bayar}}">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input class="form-control" type="text" name="nama_pembeli" id="" value="{{$penjualan->nama_pembeli}}">
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
