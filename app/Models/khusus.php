<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khusus extends Model
{
    protected $table = 'khusus';
    protected $primaryKey = 'ISBN';
    protected $fillable = [
        'ISBN','judul','pengarang','penerbit','tahun','sinopsis','kategori','cover','file_buku','pengakses'
    ];
    public $timestamps = false;
}
