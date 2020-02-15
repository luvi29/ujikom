<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jeniskitab extends Model
{
    protected $table="jeniskitab";
    protected $primaryKey="id";
    protected $fillable=['nama_jenis'];
    public $timestamps = false;
}
