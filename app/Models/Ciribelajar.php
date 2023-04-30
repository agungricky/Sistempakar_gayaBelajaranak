<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciribelajar extends Model
{
    use HasFactory;
    protected $table='tb_ciri_belajar';
    protected $fillable = [
    'no',
    'kode',
    'ciri_gaya_belajar'
    
    ];
}
