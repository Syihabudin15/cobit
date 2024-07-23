<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>REKAPITULASI SISTEM INFORMASI {{Str::upper($nama)}}</title>
</head>
<body class="body-cetak" style="padding: 5px">
  <div class="header">
    <h1>Rekapitulasi Sistem Informasi {{$nama}}</h1>
  </div>
  <div class="si-detail">
    <div class="si-item">
      <span class="item-1">Nama Sistem Informasi</span>
      <span class="item-2">:</span>
      <span class="item-3">{{$nama}}</span>
    </div>
  </div>
</body>
</html>