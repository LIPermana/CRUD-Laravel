<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public $table = "projects";
    protected $fillable = ['judul', 'penerbit', 'tahun_terbit', 'pengarang'];
}
