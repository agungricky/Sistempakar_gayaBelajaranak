<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="tes_css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Test Gaya Belajar</h2>
        </div>
        <div class="question">
                <p>1. Bagaimana Cara anak mengingat ?</p>
                    @foreach ($pertanyaan -> slice(0, 3) as $p)
                         <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
                     @endforeach
                    <br>
                keterangan: <br>
                    @foreach ($sampel as $s)
                       <input type="radio" name="radio2">{{ $s -> himpunan_fuzzy}}
                    @endforeach

                  
        </div>
        
        <div class="question">
            <p>2. Dibawah ini apa yang anak anda sukai?</p>
                @foreach ($pertanyaan -> slice(3, 3) as $p)
                         <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
                @endforeach
            
            <br>
            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>3. Apa yang sering anak anda perhatikan ketika bertemu dengan orang lain?</p>
                @foreach ($pertanyaan -> slice(6, 3) as $p)
                         <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
                @endforeach
                <br>
            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>4. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            @foreach ($pertanyaan -> slice(10, 3) as $p)
            <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>5. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            @foreach ($pertanyaan -> slice(13, 3) as $p)
            <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>6. ?</p>
            @foreach ($pertanyaan -> slice(16, 3) as $p)
            <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>7. ?</p>
            @foreach ($pertanyaan -> slice(19, 3) as $p)
            <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>8. ?</p>
            @foreach ($pertanyaan -> slice(22, 3) as $p)
            <input type="radio" name="radio1">{{$p -> ciri_gaya_belajar}} <br>
            @endforeach
            <br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

       
        <div class="hasil">
            <h3>CEK HASIL</h3>
        </div>
    </div>

    

</body>
</html>