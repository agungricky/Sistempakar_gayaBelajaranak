<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Ciribelajar;
use Illuminate\Support\Facedes\DB;

class ciribelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari tabel 
        $pertanyaan = DB::table('tb_ciri_belajar')->get();
        

        // mengirim data ke view
        return view('Home.tes', compact('pertanyaan'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
