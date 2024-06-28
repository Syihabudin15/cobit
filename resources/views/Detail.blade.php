@extends("app")
@section("content")

<section class="p-11">
  <div class="border rounded p-5">
    <h1 class="text-center text-lg font-bold">Detail Rekapitulasi {{$si->nama}}</h1>
    <div class="my-7">
      <div class="flex gap-3 py-2">
        <span style="width: 200px">Jumlah Responden</span>
        <span style="width: 50px">:</span>
        <span style="width: 200px">{{count($si->User)}}</span>
      </div>
      <div class="flex gap-3 py-2">
        <span style="width: 200px">Jumlah Pertanyaan</span>
        <span style="width: 50px">:</span>
        <span style="width: 200px">{{count($si->Kuesioner)}}</span>
      </div>
      <div class="py-2">
        <span style="width: 200px">Jumlah Jawaban</span>
        <div class="ps-7">
          @foreach ($si->Kuesioner as $item)
          <div class="flex gap-3 py-2">
            <span style="width: 200px">Pertanyaan ID {{$item->id}}</span>
            <span style="width: 50px">:</span>
            <span style="width: 200px">0001</span>
          </div>
          @endforeach
        </div>
      </div>
      <div class="flex gap-3 py-2">
        <span style="width: 200px">Maturity Level</span>
        <span style="width: 50px">:</span>
        <span style="width: 200px">0001</span>
      </div>
      <div class="flex gap-3 py-2">
        <span style="width: 200px">Keterangan</span>
        <span style="width: 50px">:</span>
        <span style="width: 200px">0001</span>
      </div>
    </div>
    <div class="flex justify-center gap-5">
      <button class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-bold italic py-2 px-3 rounded shadow">Cetak PDF</button>
      <a href="/sistem-informasi">
        <button class="bg-red-500 hover:bg-red-600 text-white text-xs font-bold italic py-2 px-3 rounded shadow">Kembali</button>
      </a>
    </div>
  </div>
</section>

@endsection