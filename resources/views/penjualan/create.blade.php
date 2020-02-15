@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Penjualan</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('penjualan.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">No Nota</label>
                                <input class="form-control" type="text" name="no_nota" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Nota</label>
                                <input class="form-control" type="date" name="tgl_nota" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Total Bayar</label>
                                <input class="form-control" type="text" name="total_bayar" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input class="form-control" type="text" name="nama_pembeli" id="">
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
