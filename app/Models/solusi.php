<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solusi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'gaya_belajar',
        'solusi'
    ];
}
