<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $primaryKey="id";
    protected $fillable=['nama_pembeli','alamat_pembeli','telpon','jeniskelamin'];
    public $timestamps = false;
}
