<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengetahuanGayaBelajar;
use App\CiriGayaBelajar;
use App\Solusi;
use App\KeputusanGayaBelajar;
use App\SampleRuleFuzzy;
use App\SampleVariableFuzzySet;
use Illuminate\Support\Facades\DB;

class gayaBelajarController extends Controller
{
    public function index()
    {
        // Mendapatkan data dari tabel tb_basis_pengetahuan
        $basis_pengetahuan = DB::table('tb_basis_pengetahuan')->get();

        // Mendapatkan data dari tabel tb_ciri_belajar
        $ciri_belajar = DB::table('tb_ciri_belajar')->get();

        // Mendapatkan data dari tabel tb_data_solusi
        $data_solusi = DB::table('tb_data_solusi')->get();

        // Mendapatkan data dari tabel tb_keputusan_gaya_belajar
        $keputusan_gaya_belajar = DB::table('tb_keputusan_gaya_belajar')->get();

        // Mendapatkan data dari tabel tb_sample_variabel
        $sample_variabel = DB::table('tb_sample_variabel')->get();

        // Mendapatkan data dari tabel tb_sample_rule
        $sample_rule = DB::table('tb_sample_rule')->get();
    }
}
