<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suka extends Model
{
    protected $table = 'suka';
    protected $primaryKey = 'id_suka';
    protected $fillable = [
        'id_suka','id_user','ISBN'
    ];
    public $timestamps = false;
}
