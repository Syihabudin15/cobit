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
    <div class="si-item">
      <span class="item-1">Keterangan</span>
      <span class="item-2">:</span>
      <span class="item-3">{{$si->deskripsi}}</span>
    </div>
    <div class="si-item">
      <span class="item-1">Tanggal Ditambahkan</span>
      <span class="item-2">:</span>
      <span class="item-3">{{\Carbon\Carbon::parse($si->created_at)->format("d F Y")}}</span>
    </div>
    <div class="si-item">
      <span class="item-1">Tanggal Cetak</span>
      <span class="item-2">:</span>
      <span class="item-3">{{\Carbon\Carbon::now()->format("d F Y")}}</span>
    </div>
  </div>
  <div style="margin: 10px 0">
    <h3>Detail Hasil Perhitungan Rekapitulasi</h3>
  </div>
  <div class="detail">
    <div class="flex-1">
      <div class="my-2">
        <div class="si-item">
          <span >Jumlah Responden</span>
          <span >:</span>
          <span >{{count($si->User)}}</span>
        </div>
        <div class="si-item">
          <span >Jumlah Pertanyaan</span>
          <span >:</span>
          <span >{{count($si->Kuesioner)}}</span>
        </div>
        <div class="si-item">
          <span >Jumlah Jawaban</span>
          <div >
            @php
                $totalJawaban = 0;
                $count = 1;
            @endphp
            @foreach ($si->Kuesioner as $item)
            <div class="flex gap-3 py-2" style="margin-top: 10px">
              <span >Pertanyaan ID {{$count}}</span>
              <span >:</span>
              <span >
                @php
                $count+=1;
                  $total = 0;
                  foreach ($item->JawabanResponden as $jawaban) {
                    $total += $jawaban["jawaban"];
                  }
                  $totalJawaban += $total;
                @endphp
                {{$total}}
              </span>
            </div>
            @endforeach
          </div>
        </div>
        <div class="si-item">
          <span >Maturity Level</span>
          <span >:</span>
          @php
              $temp = $totalJawaban / count($si->User);
              $maturity = $temp / count($si->Kuesioner);
          @endphp
          <span >{{floor($maturity)}}</span>
        </div>
        <div class="si-item">
          <span >Keterangan</span>
          <span >:</span>
          <span  class="text-justify">{{$keterangan[$maturity]}}</span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>