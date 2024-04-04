@extends("app")

@section("content")
<section>
    <div class="text-xl py-10 text-center">
        <span>Selamat Datang Auditor Di 
            <span class="text-blue-500 font-semibold">ASIKBP2MI</span>
        </span>
    </div>
    <div class="w-full my-10 p-2 bg-white md:bg-slate-50">
        <div class="p-3 md:p-20 bg-white md:flex md:flex-col md:justify-center overflow-x-auto border shadow">
            <table class="text-sm">
                <tr class="text-nowrap">
                    <th class="py-3 px-4 border border-gray-500">No</th>
                    <th class="py-3 px-4 border border-gray-500">Sistem Informasi</th>
                    <th class="py-3 px-4 border border-gray-500">Tanggal</th>
                    <th class="py-3 px-7 border border-gray-500">Keterangan</th>
                    <th class="py-3 px-4 border border-gray-500">Status Audit</th>
                    <th class="py-3 px-4 border border-gray-500">Jumlah Responden</th>
                    <th class="py-3 px-4 border border-gray-500">Jumlah Kuesioner</th>
                    <th class="py-3 px-4 border border-gray-500">Kuesioner Diisi</th>
                </tr>
                <tr>
                    <td class="border py-2 px-1 text-center">1</td>
                    <td class="border py-2 px-1 text-center">E-Kinerja</td>
                    <td class="border py-2 px-1 text-center">11-08-2001</td>
                    <td class="border py-2 px-1">Aplikasi mobile untuk menilai kinerja karwayan</td>
                    <td class="border py-2 px-1 text-center">
                        <span class="bg-red-500 text-white py-1 px-4">PROSES</span>
                    </td>
                    <td class="border py-2 px-1 text-center">10</td>
                    <td class="border py-2 px-1 text-center">100</td>
                    <td class="border py-2 px-1 text-center">15</td>
                </tr>
                <tr>
                    <td class="border py-2 px-1 text-center">2</td>
                    <td class="border py-2 px-1 text-center">SIPP</td>
                    <td class="border py-2 px-1 text-center">11-08-2001</td>
                    <td class="border py-2 px-1">Aplikasi mobile untuk surat menyurat karyawan dalam BP2MI Jawa Barat</td>
                    <td class="border py-2 px-1 text-center">
                        <span class="bg-red-500 text-white py-1 px-4">PROSES</span>
                    </td>
                    <td class="border py-2 px-1 text-center">10</td>
                    <td class="border py-2 px-1 text-center">100</td>
                    <td class="border py-2 px-1 text-center">15</td>
                </tr>
            </table>
        </div>
        <div class="flex justify-end gap-0 mt-7 px-5 text-xs">
            <a href="/" class="border px-2 py-1 rounded bg-blue-500 text-white">
                <span>1</span>
            </a>
            <a href="/" class="border px-2 py-1 rounded bg-blue-500 text-white">
                <span>2</span>
            </a>
        </div>
    </div>
</section>
@endsection