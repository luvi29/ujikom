@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Detail Penjualan</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('detailpenjualan.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Harga Jual</label>
                                <input class="form-control" type="text" name="harga_jual" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input class="form-control" type="text" name="jumlah" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Subtotal</label>
                                <input class="form-control" type="text" name="subtotal" id="">
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
