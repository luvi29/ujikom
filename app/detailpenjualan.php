<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailpenjualan extends Model
{
    protected $primaryKey="id";
    protected $fillable=['harga_jual','jumlah','subtotal'];
    public $timestamps = false;
}
