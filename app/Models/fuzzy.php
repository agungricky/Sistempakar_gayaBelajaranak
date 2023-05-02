<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fuzzy extends Model
{
    use HasFactory;
}

class PengetahuanGayaBelajar extends Model
{
    protected $table = 'tb_basis_pengetahuan';
    protected $fillable = ['no', 'kode', 'gaya_belajar'];
}

class CiriGayaBelajar extends Model
{
    protected $table = 'tb_ciri_belajar';
    protected $fillable = ['no', 'kode', 'ciri_gaya_belajar'];
}

class Solusi extends Model
{
    protected $table = 'tb_data_solusi';
    protected $fillable = ['kode', 'gaya_belajar', 'solusi'];
}

class KeputusanGayaBelajar extends Model
{
    protected $table = 'tb_keputusan_gaya_belajar';
    protected $fillable = ['kode', 'gaya_belajar', 'ciri_gaya_belajar'];
}

class SampleRuleFuzzy extends Model
{
    protected $table = 'tb_sampel_rule';
    protected $fillable = ['kode', 'keterangan'];
}

class SampleVariableFuzzySet extends Model
{
    protected $table = 'tb_sampel_variabel';
    protected $fillable = ['no', 'semesta', 'himpunan_fuzzy', 'domain'];
}
