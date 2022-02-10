<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['id','nomelivro','autor'];
    public $timestamps = false;
    protected $table = 'livro';
}
