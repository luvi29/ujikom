<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $primaryKey="id";
    protected $fillable=['no_nota','tgl_nota','total_bayar','nama_pembeli'];
    public $timestamps = false;
}
