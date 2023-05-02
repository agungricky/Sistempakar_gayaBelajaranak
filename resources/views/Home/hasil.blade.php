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
        <h1 class="fw-bold">Gaya Belajar <br> yang tepat untuk anak adalah</h1>

            <div class="alert alert-success warning text-center" role="alert">
                <h3># {{ $message }}</h3>
            </div>
            <div class="alert alert-warning" role="alert">
                <p>{{$text}}</p>
            </div>   

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Kode</td>
                    <td>Keterangan</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($rule as $rl)
                    <tr>
                        <td>{{$rl->kode}}</td>
                        <td>{{$rl->Keterangan}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="tombol mb-5">
            <a href="home"><button type="button" class="btn btn-primary">Home</button></a>
            <a href="tes"><button type="button" class="btn btn-secondary">Coba lagi</button></a>
            <a href="tipe_Belajar"><button type="button" class="btn btn-success">Solusi</button></a>

        </div>

    </div>
    

    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>