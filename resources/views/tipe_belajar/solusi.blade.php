<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solusi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css_solusi/style.css">
</head>
<body>
    <div class="container-fluid">

    <table class="table m-auto my-5 " style="width: 50%">
        <thead class="table-dark">
          <tr>
            <td>Kode</td>
            <td>Gaya Belajar</td>
            <td>Solusi</td>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                <tr>
                    <td class="bg-info">{{ $dt->kode }}</td>
                    <td>{{ $dt->gaya_belajar }}</td>
                    <td style="width: 70%">{!! $dt->solusi !!}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>