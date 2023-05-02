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
        $rule = DB::table('tb_sample_rule')->get();

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


        // $message = 'Hasilnya ' .
        //     $radio1 . $radio1_1 .
        //     $radio2 . $radio2_2 .
        //     $radio3 . $radio3_3 .
        //     $radio4 . $radio4_4 .
        //     $radio5 . $radio5_5 .
        //     $radio6 . $radio6_6 .
        //     $radio7 . $radio7_7 .
        //     $radio8 . $radio8_8;

        $tes1 = "";
        $tes2 = "";
        $tes3 = "";
        $tes4 = "";
        $tes5 = "";
        $tes6 = "";
        $tes7 = "";
        $tes8 = "";
        $text = "";

        #Gaya Belajar Auditori
        if ($radio1 == 'C02' && $radio1_1 == 'sering') {
            $tes1 = "C02";
            if ($radio2 == 'C05' && $radio2_2 == 'sering') {
                $tes2 = "C05";
                if ($radio3 == 'C08' && $radio3_3 == 'sering') {
                    $tes3 = "C08";
                    if ($radio4 == 'C11' && $radio4_4 == 'sering') {
                        $tes4 = "C11";
                        if ($radio5 == 'C14' && $radio5_5 == 'sering') {
                            $tes5 = "C14";
                            if ($radio6 == 'C17' && $radio6_6 == 'sering') {
                                $tes6 = 'C17';
                                if ($radio7 == 'C20' && $radio7_7 == 'sering') {
                                    $tes7 = 'C20';
                                    if ($radio8 == 'C23' && $radio8_8 == 'sering') {
                                        $tes8 = 'C23';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        #Gaya Belajar Kinestik
        if ($radio1 == 'C03' && $radio1_1 == 'sering') {
            $tes1 = "C03";
            if ($radio2 == 'C06' && $radio2_2 == 'sering') {
                $tes2 = "C06";
                if ($radio3 == 'C09' && $radio3_3 == 'sering') {
                    $tes3 = "C09";
                    if ($radio4 == 'C12' && $radio4_4 == 'sering') {
                        $tes4 = "C12";
                        if ($radio5 == 'C15' && $radio5_5 == 'sering') {
                            $tes5 = "C15";
                            if ($radio6 == 'C18' && $radio6_6 == 'sering') {
                                $tes6 = 'C18';
                                if ($radio7 == 'C21' && $radio7_7 == 'sering') {
                                    $tes7 = 'C21';
                                    if ($radio8 == 'C24' && $radio8_8 == 'sering') {
                                        $tes8 = 'C24';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        #Gaya Belajar Visual
        if ($radio1 == 'C01' && $radio1_1 == 'sering') {
            $tes1 = "C01";
            if ($radio2 == 'C04' && $radio2_2 == 'sering') {
                $tes2 = "C04";
                if ($radio3 == 'C07' && $radio3_3 == 'sering') {
                    $tes3 = "C07";
                    if ($radio4 == 'C10' && $radio4_4 == 'sering') {
                        $tes4 = "C10";
                        if ($radio5 == 'C13' && $radio5_5 == 'sering') {
                            $tes5 = "C13";
                            if ($radio6 == 'C16' && $radio6_6 == 'sering') {
                                $tes6 = 'C16';
                                if ($radio7 == 'C19' && $radio7_7 == 'sering') {
                                    $tes7 = 'C19';
                                    if ($radio8 == 'C22' && $radio8_8 == 'sering') {
                                        $tes8 = 'C22';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        #Gaya Belajar Auditori
        if ($radio1 == 'C02' || $radio1_1 == 'sangat sering') {
            $tes1 = "C02";
            if ($radio2 == 'C05' || $radio2_2 == 'kadang') {
                $tes2 = "C05";
                if ($radio3 == 'C08' || $radio3_3 == 'sering') {
                    $tes3 = "C08";
                    if ($radio4 == 'C11' || $radio4_4 == 'sering') {
                        $tes4 = "C11";
                        if ($radio5 == 'C14' || $radio5_5 == 'sangat sering') {
                            $tes5 = "C14";
                            if ($radio6 == 'C17' || $radio6_6 == 'sangat sering') {
                                $tes6 = 'C17';
                                if ($radio7 == 'C20' || $radio7_7 == 'kadang') {
                                    $tes7 = 'C20';
                                    if ($radio8 == 'C23' || $radio8_8 == 'sangat sering') {
                                        $tes8 = 'C23';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        #Gaya Belajar Visual
        if ($radio1 == 'C01' || $radio1_1 == 'sangat sering') {
            $tes1 = "C01";
            if ($radio2 == 'C04' || $radio2_2 == 'sangat sering') {
                $tes2 = "C04";
                if ($radio3 == 'C07' || $radio3_3 == 'kadang') {
                    $tes3 = "C07";
                    if ($radio4 == 'C10' || $radio4_4 == 'sering') {
                        $tes4 = "C10";
                        if ($radio5 == 'C13' || $radio5_5 == 'sangat sering') {
                            $tes5 = "C13";
                            if ($radio6 == 'C16' || $radio6_6 == 'jarang') {
                                $tes6 = 'C16';
                                if ($radio7 == 'C19' || $radio7_7 == 'sering') {
                                    $tes7 = 'C19';
                                    if ($radio8 == 'C22' || $radio8_8 == 'sangat sering') {
                                        $tes8 = 'C22';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


        $hasil = $tes1 . $tes2 . $tes3 . $tes4 . $tes5 . $tes6 . $tes7 . $tes8;
        if ($hasil == 'C02C05C08C11C14C17C20C23') {
            $message = "Gaya Belajar Auditori";
            $text = "Gaya belajar Auditori (auditory) adalah gaya belajar yang lebih suka belajar melalui pendengaran atau suara. Orang dengan gaya belajar ini cenderung memproses informasi dengan baik melalui pendengaran, seperti mendengarkan pidato atau kuliah, dan suka mendengarkan suara dalam proses belajar. Mereka juga bisa mengingat informasi dengan lebih baik melalui rekaman atau ulangan dengan membaca materi secara verbal atau dengan suara.

            Orang dengan gaya belajar auditori dapat belajar dengan lebih baik jika mereka diberikan kesempatan untuk mendengarkan suara atau suara-suara yang terkait dengan materi yang dipelajari. Mereka juga bisa menggunakan teknik-teknik belajar yang melibatkan pendengaran, seperti merekam kuliah, meminta orang lain untuk membacakan materi, atau mendengarkan rekaman suara dari diri sendiri saat membaca materi.";
        }
        if ($hasil == 'C03C06C09C12C15C18C21C24') {
            $message = "Gaya Belajar Kinestetik";
            $text = "Gaya belajar kinestetik adalah gaya belajar yang didominasi oleh pengalaman belajar melalui gerakan fisik dan aktivitas motorik. Orang yang memiliki gaya belajar kinestetik lebih suka belajar dengan cara melakukan, mencoba, dan mengalami langsung. Mereka cenderung mudah bosan jika hanya duduk diam dan mendengarkan atau membaca materi.

            Orang yang memiliki gaya belajar kinestetik biasanya lebih mudah mengingat informasi yang mereka pelajari ketika mereka bergerak atau melakukan tindakan fisik seperti menulis, menggambar, atau melakukan eksperimen. Mereka juga cenderung mengingat lebih baik ketika mereka terlibat dalam kegiatan yang membutuhkan koordinasi motorik seperti berolahraga atau bermain musik.
            
            Untuk memaksimalkan potensi belajar orang yang memiliki gaya belajar kinestetik, disarankan agar mereka terlibat dalam kegiatan belajar yang memungkinkan mereka untuk bergerak dan melakukan tindakan fisik, seperti diskusi kelompok, simulasi, atau proyek-proyek praktis.";
        }
        if ($hasil == 'C01C04C07C10C13C16C19C22') {
            $message = "Gaya Belajar Visual";
            $text = "Gaya belajar Visual adalah salah satu dari tiga gaya belajar menurut teori belajar VAK (Visual, Auditory, dan Kinesthetic). Individu dengan gaya belajar Visual memiliki kecenderungan untuk memproses informasi dengan menggunakan indera penglihatan. Mereka lebih mudah memahami dan mengingat informasi melalui gambar, grafik, diagram, video, atau presentasi visual lainnya.

            Individu dengan gaya belajar Visual juga cenderung memiliki kemampuan spasial yang lebih baik dalam memahami bentuk dan posisi objek serta mengingat arah dan jarak. Mereka juga sering mengumpulkan informasi dengan melihat sekeliling, dan cenderung menata atau mengorganisir informasi dalam bentuk diagram atau grafik.
            
            Dalam pembelajaran, individu dengan gaya belajar Visual lebih mudah menyerap informasi dari media visual seperti buku, peta, slide presentasi, atau gambar. Oleh karena itu, pendekatan pembelajaran yang efektif untuk individu dengan gaya belajar Visual adalah dengan menggunakan gambar, grafik, diagram, dan media visual lainnya dalam presentasi materi atau pelajaran.";
        }




        // return view('Home.hasil')->with('message', $message);
        return view('Home.hasil', compact('message', 'rule', 'text'));
    }
}
