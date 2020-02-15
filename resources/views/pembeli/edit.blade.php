@extends('layouts.backend')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Edit Data Pembeli</div>
                    </center>

                    <div class="card-body">
                        <form action="{{route('pembeli.update', $pembeli->id)}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input class="form-control" type="text" name="nama_pembeli" id="" value="{{$pembeli->nama_pembeli}}">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Pembeli</label>
                                <input class="form-control" type="text" name="alamat_pembeli" id="" value="{{$pembeli->alamat_pembeli}}">
                            </div>
                            <div class="form-group">
                                <label for="">Telpon</label>
                                <input class="form-control" type="text" name="telpon" id="" value="{{$pembeli->telpon}}">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input class="form-control" type="text" name="jeniskelamin" id="" value="{{$pembeli->jeniskelamin}}">
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
