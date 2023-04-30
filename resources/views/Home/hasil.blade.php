<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css_hasil/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Gaya Belajar yang cocok untuk anak anda adalah</h1>
    @if(isset($message))
        <div class="alert alert-success warning" role="alert">
            {{ $message }}
        </div>
        <div class="alert alert-warning" role="alert">
        </div>   
    @endif <br>

        <div class="tombol">
            <a href="home"><button type="button" class="btn btn-primary">Home</button></a>
            <a href="tes"><button type="button" class="btn btn-secondary">Coba lagi</button></a>
            <a href="tipe_Belajar"><button type="button" class="btn btn-success">Solusi</button></a>

        </div>

    </div>
    

    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>