@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Pembeli</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('pembeli.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input class="form-control" type="text" name="nama_pembeli" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Pembeli</label>
                                <input class="form-control" type="text" name="alamat_pembeli" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Telpon</label>
                                <input class="form-control" type="text" name="telpon" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input class="form-control" type="text" name="jeniskelamin" id="">
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
