<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class tesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertanyaan = DB::table('tb_ciri_belajar')->get();
        $sampel = DB::table('tb_sampel_variabel')->get();

        return view("home.tes", compact('pertanyaan', 'sampel'));
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

    public function processForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gender' => 'required',
            'sports' => 'required',
            'hobbies' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Proses input jika validasi sukses

        return redirect()->route('form')->with('success', 'Data berhasil disimpan.');
    }

    public function submitForm(Request $request)
    {
        $radio1 = $request->input('radio1');
        $radio1_1 = $request->input('radio1_1');
        $radio2 = $request->input('radio2');
        $radio2_2 = $request->input('radio2_2');
        $radio3 = $request->input('radio3');
        $radio3_3 = $request->input('radio3_3');
        $radio4 = $request->input('radio4');
        $radio4_4 = $request->input('radio4_4');
        $radio5 = $request->input('radio5');
        $radio5_5 = $request->input('radio5_5');
        $radio6 = $request->input('radio6');
        $radio6_6 = $request->input('radio6_6');
        $radio7 = $request->input('radio7');
        $radio7_7 = $request->input('radio7_7');
        $radio8 = $request->input('radio8');
        $radio8_8 = $request->input('radio8_8');


        $message = 'Hasilnya' .
            $radio1 . $radio1_1 .
            $radio2 . $radio2_2 .
            $radio3 . $radio3_3 .
            $radio4 . $radio4_4 .
            $radio5 . $radio5_5 .
            $radio6 . $radio6_6 .
            $radio7 . $radio7_7 .
            $radio8 . $radio8_8;

        return view('Home.hasil')->with('message', $message);
    }
}
