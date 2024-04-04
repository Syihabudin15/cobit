@extends("app")

@section("content")
<section>
    <div class="text-xl py-10 text-center">
        <span>Selamat Datang Responden Di 
            <span class="text-blue-500 font-semibold">ASIKBP2MI</span>
        </span>
    </div>
    <div class="bg-white flex flex-wrap gap-10 items-center">
        <div class="flex-1 p-3 text-sm">
            <table>
                <tr>
                    <td class="py-1 px-5 text-nowrap">Username</td>
                    <td class="py-1 px-5 text-nowrap">:</td>
                    <td class="py-1 px-5">decky123</td>
                </tr>
                <tr>
                    <td class="py-1 px-5 text-nowrap">Nama Pengguna</td>
                    <td class="py-1 px-5 text-nowrap">:</td>
                    <td class="py-1 px-5">Decky</td>
                </tr>
                <tr>
                    <td class="py-1 px-5 text-nowrap">Sistem Informasi</td>
                    <td class="py-1 px-5 text-nowrap">:</td>
                    <td class="py-1 px-5">E-Kinerja</td>
                </tr>
                <tr>
                    <td class="py-1 px-5 text-nowrap">Keterangan</td>
                    <td class="py-1 px-5 text-nowrap text-justify">:</td>
                    <td class="py-1 px-5">E-Kinerja adalah sebuah aplikasi mobile yang digunakan untuk menilai kinerja karyawan setiap bulan</td>
                </tr>
                <tr>
                    <td class="py-1 px-5 text-nowrap">Jumlah Kuesioner</td>
                    <td class="py-1 px-5 text-nowrap text-justify">:</td>
                    <td class="py-1 px-5">15</td>
                </tr>
                <tr>
                    <td class="py-1 px-5 text-nowrap">Status</td>
                    <td class="py-1 px-5 text-nowrap text-justify">:</td>
                    <td class="py-1 px-5">
                        <span class="bg-green-500 text-white py-1 px-3">SELESAI</span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="flex-1 p-3 flex justify-center">
            <div class="border rounded shadow w-96 md:w-4/6">
                <p class="text-green-400 font-bold text-center">INFORMASI</p>
                <div class="p-2 my-5 text-justify">
                    <p class="text-sm">
                        Ada beberapa pertanyaan yang akan diajukan kepada Example untuk dilakukan Rekapitulasi Perhitungan Audit pada sistem informasi BP2MI Jawa Barat.
                    </p>
                    <p class="text-sm mt-4">
                        Tekan mulai untuk memulai menjawab pertanyaan yang diajukan Auditor.
                    </p>
                    <a href="/" class="flex justify-center mt-5">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-5 rounded shadow">MULAI</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection