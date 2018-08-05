<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catetan extends Model
{
    protected $table = "catetan";
    public $timestamps = false;
    protected $primaryKey = 'id_catetan';
    protected $fillable = ['judul', 'deskripsi'];
}
