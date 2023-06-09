<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="tes_css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="header p-4">
            <h2>Test Gaya Belajar</h2>
        </div>
    <form method="post" action="{{ route('submit-form') }}">
        @csrf
        <div class="question">
                <p>1. Bagaimana Cara anak mengingat ?</p>
                    @foreach ($pertanyaan -> slice(0, 3) as $p)
                         <input type="radio" name="radio1" value="{{$p->kode}}"> {{$p -> ciri_gaya_belajar}} <br>
                     @endforeach
                    <br>
                keterangan: <br>
                    @foreach ($sampel as $s)
                       <input type="radio" name="radio1_1" value="{{$s->himpunan_fuzzy}}"> {{ $s -> himpunan_fuzzy}}
                    @endforeach

                  
        </div>
        
        <div class="question">
            <p>2. Dibawah ini apa yang anak anda sukai?</p>
                @foreach ($pertanyaan -> slice(3, 3) as $p)
                         <input type="radio" name="radio2" value="{{$p->kode}}"> {{$p -> ciri_gaya_belajar}} <br>
                @endforeach
            
            <br>
            keterangan: <br>
                @foreach ($sampel as $s)
                    <input type="radio" name="radio2_2" value="{{$s->himpunan_fuzzy}}" > {{ $s -> himpunan_fuzzy}}
                 @endforeach
        </div>

        <div class="question">
            <p>3. Apa yang sering anak anda perhatikan ketika bertemu dengan orang lain?</p>
                @foreach ($pertanyaan -> slice(6, 3) as $p)
                         <input type="radio" name="radio3" value="{{$p->kode}}" > {{$p -> ciri_gaya_belajar}} <br>
                @endforeach
                <br>
            keterangan: <br>
                @foreach ($sampel as $s)
                    <input type="radio" name="radio3_3" value="{{$s->himpunan_fuzzy}}"> {{ $s -> himpunan_fuzzy}}
                 @endforeach
        </div>

        <div class="question">
            <p>4. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            @foreach ($pertanyaan -> slice(9, 3) as $p)
                <input type="radio" name="radio4" value="{{$p->kode}}"> {{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
                @foreach ($sampel as $s)
                    <input type="radio" name="radio4_4" value="{{$s->himpunan_fuzzy}}"> {{ $s -> himpunan_fuzzy}}
                 @endforeach
        </div>

        <div class="question">
            <p>5. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            @foreach ($pertanyaan -> slice(12, 3) as $p)
            <input type="radio" name="radio5" value="{{$p->kode}}"> {{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
                @foreach ($sampel as $s)
                    <input type="radio" name="radio5_5" value="{{$s->himpunan_fuzzy}}"> {{ $s -> himpunan_fuzzy}}
                @endforeach
        </div>

        <div class="question">
            <p>6. Bagaimana kah tingkat konsentrasi anak anda?</p>
            @foreach ($pertanyaan -> slice(15, 3) as $p)
            <input type="radio" name="radio6" value="{{$p->kode}}"> {{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
                @foreach ($sampel as $s)
                    <input type="radio" name="radio6_6" value="{{$s->himpunan_fuzzy}}"> {{ $s -> himpunan_fuzzy}}
                @endforeach
        </div>

        <div class="question">
            <p>7. Apa yang anak anda sukai ketika belajar</p>
            @foreach ($pertanyaan -> slice(18, 3) as $p)
            <input type="radio" name="radio7" value="{{$p->kode}}"> {{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
                @foreach ($sampel as $s)
                    <input type="radio" name="radio7_7" value="{{$s->himpunan_fuzzy}}"> {{ $s -> himpunan_fuzzy}}
                @endforeach
        </div>

        <div class="question">
            <p>8. kendala seperti apa yang anak anda alami ketika belajar?</p>
            @foreach ($pertanyaan -> slice(21, 3) as $p)
            <input type="radio" name="radio8" value="{{$p->kode}}"> {{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
                @foreach ($sampel as $s)
                    <input type="radio" name="radio8_8" value="{{$s->himpunan_fuzzy}}"> {{ $s -> himpunan_fuzzy}}
                @endforeach
        </div>

       
        <div class="hasil">
            <div class="d-grid gap-2">
                <button class="btn btn-success" type="submit">Kirim</button>
              </div>
        </div>
    </form>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>