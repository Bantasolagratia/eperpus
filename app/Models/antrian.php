<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrian extends Model
{
    protected $table = 'antrian';
    protected $primaryKey = 'ISBN';
    protected $fillable = [
        'ISBN','id_antrian','id_user'
    ];
    public $timestamps = false;
}
