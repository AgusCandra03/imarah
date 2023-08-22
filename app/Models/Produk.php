<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'harga', 'id_kategori', 'foto_produk', 'deskripsi'];

    public function kategoris()
    {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }
}
