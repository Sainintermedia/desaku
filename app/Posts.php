<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";
 
    protected $fillable = ['file','judul','keterangan','nik'];
}

