<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['id','nomeserie','categoriaserie'];
    public $timestamps = false;
    protected $table = 'serie';
}
