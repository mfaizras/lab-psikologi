@extends('admin.layouts.main')

@section('content')
    <div class="card p-3">
        <h1 class="font-bold text-lg mb-3">Profil Calon {{$data->position}}</h1>
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <td class="font-bold">Nama</td>
                        <td>:</td>
                        <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Kelas</td>
                        <td>:</td>
                        <td>{{$data->class}}</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Jurusan</td>
                        <td>:</td>
                        <td>{{$data->major}}</td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <table>
                    <tr>
                        <td class="font-bold">NPM</td>
                        <td>:</td>
                        <td>{{$data->npm}}</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Posisi</td>
                        <td>:</td>
                        <td>{{$data->position}}</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Lokasi Kampus</td>
                        <td>:</td>
                        <td>{{$data->location}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>
        <div>
            <h2 class="font-bold mt-2">Data Diri</h2>
            <table>
                <tr>
                    <td class="font-bold">Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{$data->birth_place}}, {{$data->birth_date}} ({{ Carbon\Carbon::parse($data->birth_date)->age}} Tahun)</td>
                </tr>
                <tr>
                    <td class="font-bold">Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{$data->gender == "M" ? "Laki - Laki" : "Perempuan"}}</td>
                </tr>
                <tr>
                    <td class="font-bold">Alamat</td>
                    <td>:</td>
                    <td>{{$data->address}}</td>
                </tr>
                <tr>
                    <td class="font-bold">Nomor HP</td>
                    <td>:</td>
                    <td>{{$data->phone}}</td>
                </tr>
                <tr>
                    <td class="font-bold">Email</td>
                    <td>:</td>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <td class="font-bold">IPK Terkahir</td>
                    <td>:</td>
                    <td>{{$data->last_gpa}}</td>
                </tr>
            </table>
            <hr class="mb-3">
            <div class="grid md:grid-cols-3 grid-cols-1 auto-cols-auto gap-4">
                <a href="{{Illuminate\Support\Facades\Storage::url($data->cv_path)}}" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full text-center" target="_blank" download>Download CV</a>
                <a href="{{Illuminate\Support\Facades\Storage::url($data->krs_path)}}" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full text-center" target="_blank" download>Download KRS</a>
                <a href="{{Illuminate\Support\Facades\Storage::url($data->photo_path)}}" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full text-center" target="_blank" download>Download Foto</a>
                <a href="{{Illuminate\Support\Facades\Storage::url($data->student_card_path)}}" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full text-center" target="_blank" download>Download KTM</a>
                <a href="{{Illuminate\Support\Facades\Storage::url($data->identity_path)}}" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full text-center" target="_blank" download>Download KTP</a>
                <a href="{{Illuminate\Support\Facades\Storage::url($data->score_path)}}" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full text-center" target="_blank" download>Download Rangkuman Nilai</a>
                <a href="{{Illuminate\Support\Facades\Storage::url($data->certificate_path)}}" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full text-center" target="_blank" download>Download Sertifikat</a>
            </div>
            {{-- {{ Illuminate\Support\Facades\Storage::download($data->cv_path)}} --}}
        </div>
    </div>
@endsection

