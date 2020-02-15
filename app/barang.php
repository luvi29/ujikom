<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $primaryKey="id";
    protected $fillable=['nama_kitab','harga_satuan','stok_kitab'];
    public $timestamps = false;
}
