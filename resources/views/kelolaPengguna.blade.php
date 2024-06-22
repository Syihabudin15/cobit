@extends("app")

@section("content")
<section>
    <div class="w-full my-0 p-2 bg-white md:bg-slate-50">
        <div class="p-3 md:p-20 bg-white md:flex md:flex-col md:justify-center overflow-x-auto border shadow">
            <div class="bg-blue-500 text-white font-bold italic p-3">
                <p>Kelola Data Pengguna</p>
            </div>
            {{-- Start Error --}}
            @if ($errors->any())
            <div class="text-red-500 text-xs italic">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="text-red-500 text-xs italic ps-5">
                    <span>{{ $message }}</span>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="text-green-500 text-xs italic ps-5">
                    <span>{{ $message }}</span>
                </div>
            @endif
            {{-- End Error --}}
            <div class="p-3 flex flex-wrap gap-2 text-xs">
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-4 rounded shadow" onclick="showHideModal('tambah_pengguna')">Tambah</button>
                <form action="/pengguna" >
                    <div class="flex items-center gap-2">
                        <input class="p-1 border rounded-sm" name="nama" value="{{old("nama")}}" />
                        <select name="role" id="role" class="border p-1 rounded">
                            <option value="ALL">ALL</option>
                            <option value="AUDITOR">AUDITOR</option>
                            <option value="RESPONDEN">RESPONDEN</option>
                        </select>
                        <button class="border rounded-sm p-1" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <table class="text-sm">
                <tr class="text-nowrap">
                    <th class="py-3 px-4 border border-gray-500">No</th>
                    <th class="py-3 px-4 border border-gray-500">Nama</th>
                    <th class="py-3 px-4 border border-gray-500">Username</th>
                    <th class="py-3 px-4 border border-gray-500">Role</th>
                    <th class="py-3 px-4 border border-gray-500">Sistem Informasi</th>
                    <th class="py-3 px-4 border border-gray-500">Aksi</th>
                </tr>
                @for ($i = 0; $i < count($data); $i++)
                    <tr>
                    <td class="border py-2 px-1 text-center">{{$i+1}}</td>
                    <td class="border py-2 px-1 text-center">{{$data[$i]->nama}}</td>
                    <td class="border py-2 px-1 text-center">{{$data[$i]->username}}</td>
                    <td class="border py-2 px-1 text-center">{{$data[$i]->role}}</td>
                    <td class="border py-2 px-1 text-center">{{$data[$i]->SistemInformasi["nama"]}}</td>
                    <td class="border py-2 px-1 text-center">
                        <button class="bg-green-500 hover:bg-green-600 text-white p-1 rounded shadow" onclick="handleUpdate({{$data[$i]}},'edit_pengguna')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path d="M13.488 2.513a1.75 1.75 0 0 0-2.475 0L6.75 6.774a2.75 2.75 0 0 0-.596.892l-.848 2.047a.75.75 0 0 0 .98.98l2.047-.848a2.75 2.75 0 0 0 .892-.596l4.261-4.262a1.75 1.75 0 0 0 0-2.474Z" />
                                <path d="M4.75 3.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h6.5c.69 0 1.25-.56 1.25-1.25V9A.75.75 0 0 1 14 9v2.25A2.75 2.75 0 0 1 11.25 14h-6.5A2.75 2.75 0 0 1 2 11.25v-6.5A2.75 2.75 0 0 1 4.75 2H7a.75.75 0 0 1 0 1.5H4.75Z" />
                            </svg>
                        </button>
                        <a href="/pengguna/delete?id={{$data[$i]->id}}">
                            <button class="bg-red-500 hover:bg-red-600 text-white p-1 rounded shadow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M2 3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3Z" />
                                    <path fill-rule="evenodd" d="M13 6H3v6a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V6ZM5.72 7.47a.75.75 0 0 1 1.06 0L8 8.69l1.22-1.22a.75.75 0 1 1 1.06 1.06L9.06 9.75l1.22 1.22a.75.75 0 1 1-1.06 1.06L8 10.81l-1.22 1.22a.75.75 0 0 1-1.06-1.06l1.22-1.22-1.22-1.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="flex justify-end gap-0 mt-7 px-5 text-xs">
            @for ($i = 0; $i < ceil($total/20); $i++)
                <a href="/sistem-informasi?page={{$i+1}}" clas="rounded shadow">
                    <span class="px-2 py-1 border rounded shadow bg-blue-500 hover:bg-blue-600 {{$page == $i+1 ? "text-red-500" : "text-white"}} font-bold">
                        {{$i+1}}
                    </span>
                </a>
            @endfor
        </div>
    </div>
</section>
<!-- The Modal -->
<div class="modal auto-hide" id="tambah_pengguna">
    <div class="modal-content">
        <div class="header-modal">
            <span>Tambah Data Pengguna</span>
            <span class="close" onclick="showHideModal('tambah_pengguna')">&times;</span>
        </div>
        <div class="body-modal my-2">
            <form action="/pengguna" method="post">
                @method("post")
                @csrf
                <div class="flex gap-5 items-center py-2">
                    <label for="role" class="w-32">Role</label>
                    <span class="w-10">:</span>
                    <select name="role" id="role" class="w-full rounded p-1 border">
                        <option value="AUDITOR">AUDITOR</option>
                        <option value="RESPONDEN">RESPONDEN</option>
                    </select>
                </div>
                <div class="flex gap-5 items-center py-2">
                    <label for="nama" class="w-32">Nama</label>
                    <span class="w-10">:</span>
                    <input type="text" name="nama" id="nama" class="border p-1 rounded w-full" value="{{old("nama")}}"/>
                </div>
                <div class="flex gap-5 items-center py-2">
                    <label for="username" class="w-32">Username</label>
                    <span class="w-10">:</span>
                    <input type="text" name="username" id="username" class="border p-1 rounded w-full" value="{{old("username")}}"/>
                </div>
                <div class="flex gap-5 items-center py-2">
                    <label for="password" class="w-32">Password</label>
                    <span class="w-10">:</span>
                    <input type="text" name="password" id="password" class="border p-1 rounded w-full" value="{{old("password")}}"/>
                </div>
                <div class="flex gap-5 items-center py-2">
                    <label for="sistem_informasi_id" class="w-32">Sistem Informasi</label>
                    <span class="w-10">:</span>
                    <select name="sistem_informasi_id" id="sistem_informasi_id" class="w-full rounded p-1 border">
                        @foreach ($si as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex gap-5 justify-end mt-5">
                    <button type="button" onclick="showHideModal('tambah_si')" class="bg-red-500 hover:bg-red-600 text-white text-xs py-2 px-3 rounded shadow">Batal</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white text-xs py-2 px-3 rounded shadow">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal auto-hide" id="edit_pengguna">
    <div class="modal-content">
        <div class="header-modal">
            <span>Edit Data Pengguna</span>
            <span class="close" onclick="showHideModal('edit_pengguna')">&times;</span>
        </div>
        <div class="body-modal my-2">
            <form action="/pengguna" method="post">
                @method("put")
                @csrf
                <div id="update-form"></div>
                <div class="flex gap-5 justify-end mt-5">
                    <button type="button" onclick="showHideModal('edit_pengguna')" class="bg-red-500 hover:bg-red-600 text-white text-xs py-2 px-3 rounded shadow">Batal</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white text-xs py-2 px-3 rounded shadow">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function handleUpdate(data, id){
        document.getElementById(id).classList.toggle("auto-hide");
        let el = document.getElementById("update-form");
        el.innerHTML = `
            <div>
                <input type="text" name="id" id="id" class="border hidden p-1 rounded w-full" value="${data.id}"/>
                <div class="flex gap-5 items-center py-2">
                    <label for="nama" class="w-32">Nama</label>
                    <span class="w-10">:</span>
                    <input type="text" name="nama" id="nama" class="border p-1 rounded w-full" value="${data.nama}"/>
                </div>
                <div class="flex gap-5 items-center py-2">
                    <label for="username" class="w-32">Username</label>
                    <span class="w-10">:</span>
                    <input type="text" name="username" id="username" class="border p-1 rounded w-full" value="${data.username}"/>
                </div>
            </div>
        `;
    }
</script>
@endsection