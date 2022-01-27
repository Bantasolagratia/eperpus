<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','nomor_diskusi','tipe','id_user','content'
    ];
    public $timestamps = false;
}
