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


                 {{-- <input type="checkbox">{{ $p->ciri_gaya_belajar }} <br> --}}

                
                {{-- <input type="checkbox"> Mudah mengingat hal yang didengar <br>
                <input type="checkbox"> Mudah mengingat hal yang dilakukan <br><br> --}}
    
                keterangan: <br>
                <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering   
        </div>
        
        <div class="question">
            <p>2. Dibawah ini apa yang anak anda sukai?</p>
            <input type="radio" name="radio1"> Sangat menyukai lukisan<br>
            <input type="radio" name="radio1"> Sangat menyukai musik<br>
            <input type="radio" name="radio1"> Sangat menyukai tarian<br><br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>3. Apa yang sering anak anda perhatikan ketika bertemu dengan orang lain?</p>
            <input type="radio" name="radio1"> Cenderung memperhatikan orang pada wajah dan pakaian yang dikenakan<br>
            <input type="radio" name="radio1"> Cenderung memperhatikan orang pada pembicaraan<br>
            <input type="radio" name="radio1"> Cenderung memperhatikan orang pada perilaku dan gerak geriknya<br><br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>4. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            <input type="radio" name="radio1"> Suka diajari oleh guru dengan cara menggambarkan suatu object di papan tulis<br>
            <input type="radio" name="radio1"> Suka diajari oleh guru dengan cara menjelaskan dengan suara indah<br>
            <input type="radio" name="radio1"> Suka diajari oleh guru dengan cara mempraktekkan dan menyentuh object yang diajarkan<br><br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="question">
            <p>4. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            <input type="radio" name="radio1"> Mementingkan penampilan<br>
            <input type="radio" name="radio1"> Mementingkan kemampuan berbicara dengan baik<br>
            <input type="radio" name="radio1"> Mementingkan pergerakan fisik<br><br>

            keterangan: <br>
            <input type="radio" name="radio2">jarang <input type="radio" name="radio2">kadang <input type="radio" name="radio2">sering <input type="radio" name="radio2">sangat sering 
        </div>

        <div class="hasil">
            <h3>CEK HASIL</h3>
        </div>
    </div>

    

</body>
</html>