@extends('layouts.main')

@section('main_section')
    <div class="container px-4 mt-4 mb-4 p-3 bg-white rounded-lg">
        <h1 class="text-center text-3xl font-bold uppercase mb-5">Form Pendaftaran</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
        @endif
        <form action="{{route('registrationProcess')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Nama Lengkap</label>

                  <input type="text" class="form-control" id="inputNama" name="name" value="{{old('name')}}" placeholder="Masukkan Nama lengkap anda">
              </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">NPM</label>
                  <input type="number" class="form-control" id="inputNama" name="npm" value="{{old('npm')}}" placeholder="Masukkan NPM Anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Kelas</label>

                    <input type="text" class="form-control" id="inputNama" name="class" value="{{old('class')}}" placeholder="Masukkan Kelas anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Jurusan</label>

                    <input type="text" class="form-control" id="inputNama" name="major" value="{{old('major')}}" placeholder="Masukkan Jurusan anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Lokasi Kampus</label>

                    <input type="text" class="form-control" id="inputNama" name="location" value="{{old('location')}}" placeholder="Masukkan Lokasi Kampus anda">
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Tempat Lahir</label>
                    <input type="text" class="form-control" id="inputNama" name="birth_place" value="{{old('birth_place')}}" placeholder="Masukkan Tempat Lahir anda">
                </div>
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="inputNama" name="birth_date" value="{{old('birth_date')}}" placeholder="Masukkan Tanggal Lahir anda">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Jenis Kelamin</label>
                <select name="gender" id="uinputGender" class="form-control">
                    <option value="">Pilih Salah Satu Pilihan</option>
                    <option value="M" {{ (old("gender") == 'M' ? "selected":"") }}>Laki - Laki</option>
                    <option value="F" {{ (old("gender") == 'F' ? "selected":"") }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" value="{{old('address')}}" placeholder="Masukkan Alamat Anda"></textarea>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Nomor HP</label>
                    <input type="number" class="form-control" id="inputNama" name="phone" value="{{old('phone')}}" placeholder="Masukkan Nomor HP anda">
                </div>
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Email</label>
                    <input type="email" class="form-control" id="inputNama" name="email" value="{{old('email')}}" placeholder="Masukkan Email anda">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Posisi</label>
                <input type="text" class="form-control" id="inputNama" name="position" value="{{old('position')}}" placeholder="Masukkan Posisi yang anda inginkan">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">IPK Terakhir</label>
                <input type="number" class="form-control" id="inputNama" name="last_gpa" value="{{old('last_gpa')}}" step=".01" placeholder="Masukkan IPK Terakhir anda">
            </div>
            <div class="inline-flex items-center justify-center w-full">
                <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                <span class="absolute px-3 font-medium text-slate-700 text-sm -translate-x-1/2 bg-white left-1/2 ">Upload File</span>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">CV</label>
                <input type="file" class="form-control" id="inputNama" name="cv_path" placeholder="Masukkan CV Terakhir anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">KRS</label>
                <input type="file" class="form-control" id="inputNama" name="krs_path"placeholder="Masukkan KRS Terakhir anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Pas Foto</label>
                <input type="file" class="form-control" id="inputNama" name="photo_path" placeholder="Masukkan Pas Foto Terakhir anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">KTM</label>
                <input type="file" class="form-control" id="inputNama" name="student_card_path" placeholder="Masukkan KTM Terakhir anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">KTP</label>
                <input type="file" class="form-control" id="inputNama" name="identity_path" placeholder="Masukkan KTP Terakhir anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Rangkuman Nilai</label>
                <input type="file" class="form-control" id="inputNama" name="score_path" placeholder="Masukkan Rangkuman Nilai Terakhir anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Certificate</label>
                <input type="file" class="form-control" id="inputNama" name="certificate_path" placeholder="Masukkan Certificate Terakhir anda">
            </div>
            <button type="submit" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full ">Submit</button>
        </form>
    </div>
</div>
@endsection
