<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['id','nomefilme','categoriafilme'];
    public $timestamps = false;
    protected $table = 'filme';
}
