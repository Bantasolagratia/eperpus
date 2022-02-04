<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class izinkhusus extends Model
{
    protected $table = 'izinkhusus';
    protected $primaryKey = 'id_izin';
    protected $fillable = [
        'id_izin','id_user','ISBN'
    ];
    public $timestamps = false;
}
