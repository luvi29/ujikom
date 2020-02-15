@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Edit Data Detail Penjualan</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('detailpenjualan.update', $detailpenjualan->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Harga Jual</label>
                                <input class="form-control" type="text" name="harga_jual" id="" value="{{$detailpenjualan->harga_jual}}">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input class="form-control" type="text" name="jumlah" id="" value="{{$detailpenjualan->jumlah}}">
                            </div>
                            <div class="form-group">
                                <label for="">Subtotal</label>
                                <input class="form-control" type="text" name="subtotal" id="" value="{{$detailpenjualan->subtotal}}">
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
