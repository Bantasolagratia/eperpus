<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'ISBN';
    protected $fillable = [
        'ISBN','judul','pengarang','penerbit','tahun','sinopsis','kategori','cover','file_buku'
    ];
    public $timestamps = false;
}
