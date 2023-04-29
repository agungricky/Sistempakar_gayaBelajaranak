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
                @foreach ($ciribelajar as $ciri)
                 <input type="checkbox">{{$ciri->ciri_gaya_belajar}} <br>
                @endforeach
                
                <input type="checkbox"> Mudah mengingat hal yang didengar <br>
                <input type="checkbox"> Mudah mengingat hal yang dilakukan <br><br>
    
                keterangan: <br>
                <input type="checkbox">jarang <input type="checkbox">kadang <input type="checkbox">sering <input type="checkbox">sangat sering   
        </div>
        
        <div class="question">
            <p>2. Dibawah ini apa yang anak anda sukai?</p>
            <input type="checkbox"> Sangat menyukai lukisan<br>
            <input type="checkbox"> Sangat menyukai musik<br>
            <input type="checkbox"> Sangat menyukai tarian<br><br>

            keterangan: <br>
            <input type="checkbox">jarang <input type="checkbox">kadang <input type="checkbox">sering <input type="checkbox">sangat sering 
        </div>

        <div class="question">
            <p>3. Apa yang sering anak anda perhatikan ketika bertemu dengan orang lain?</p>
            <input type="checkbox"> Cenderung memperhatikan orang pada wajah dan pakaian yang dikenakan<br>
            <input type="checkbox"> Cenderung memperhatikan orang pada pembicaraan<br>
            <input type="checkbox"> Cenderung memperhatikan orang pada perilaku dan gerak geriknya<br><br>

            keterangan: <br>
            <input type="checkbox">jarang <input type="checkbox">kadang <input type="checkbox">sering <input type="checkbox">sangat sering 
        </div>

        <div class="question">
            <p>4. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            <input type="checkbox"> Suka diajari oleh guru dengan cara menggambarkan suatu object di papan tulis<br>
            <input type="checkbox"> Suka diajari oleh guru dengan cara menjelaskan dengan suara indah<br>
            <input type="checkbox"> Suka diajari oleh guru dengan cara mempraktekkan dan menyentuh object yang diajarkan<br><br>

            keterangan: <br>
            <input type="checkbox">jarang <input type="checkbox">kadang <input type="checkbox">sering <input type="checkbox">sangat sering 
        </div>

        <div class="question">
            <p>4. Dibawah ini apa yang membuat anak anda tertarik atau sukai?</p>
            <input type="checkbox"> Mementingkan penampilan<br>
            <input type="checkbox"> Mementingkan kemampuan berbicara dengan baik<br>
            <input type="checkbox"> Mementingkan pergerakan fisik<br><br>

            keterangan: <br>
            <input type="checkbox">jarang <input type="checkbox">kadang <input type="checkbox">sering <input type="checkbox">sangat sering 
        </div>

        <div class="hasil">
            <h3>CEK HASIL</h3>
        </div>
    </div>

    

</body>
</html>