@extends('admin.layouts.main')

@section('content')
    <div class="card p-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
            @endforeach
        </div>
    @endif
        <form action="{{route('participantEditAction', ['registration' => $registration->npm])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Nama Lengkap</label>

                  <input type="text" class="form-control" id="inputNama" name="name" value="{{ $registration->name }}" placeholder="Masukkan Nama lengkap anda">
              </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">NPM</label>
                  <input type="number" class="form-control" id="inputNama" name="npm" value="{{ $registration->npm }}" placeholder="Masukkan NPM Anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Kelas</label>

                    <input type="text" class="form-control" id="inputNama" name="class" value="{{ $registration->class }}" placeholder="Masukkan Kelas anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Jurusan</label>

                @php
                $majors = App\Models\Major::active()->get();
            @endphp
                <select name="major" id="" class="form-control">
                    <option value="">Pilih Salah satu Jurusan</option>
                    @foreach ($majors as $major)
                        <option value="{{$major->major_name}}" {{$registration->major == $major->major_name ? 'selected':""}}>{{$major->major_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Lokasi Kampus</label>

                @php
                $locations = App\Models\Location::active()->get();
            @endphp
                <select name="location" id="" class="form-control">
                    <option value="">Pilih Salah satu lokasi kampus</option>
                    @foreach ($locations as $location)
                        <option value="{{$location->location_name}}" {{$registration->location == $location->location_name ? 'selected':""}}>{{$location->location_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Tempat Lahir</label>
                    <input type="text" class="form-control" id="inputNama" name="birth_place" value="{{ $registration->birth_place }}" placeholder="Masukkan Tempat Lahir anda">
                </div>
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="inputNama" name="birth_date" value="{{ $registration->birth_date }}" placeholder="Masukkan Tanggal Lahir anda">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Jenis Kelamin</label>
                <select name="gender" id="uinputGender" class="form-control">
                    <option value="">Pilih Salah Satu Pilihan</option>
                    <option value="M" {{ ($registration->gender  == 'M' ? "selected":"") }}>Laki - Laki</option>
                    <option value="F" {{ ($registration->gender == 'F' ? "selected":"") }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" value="{{ $registration->address }}" placeholder="Masukkan Alamat Anda">{{ $registration->address }}</textarea>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Nomor HP</label>
                    <input type="number" class="form-control" id="inputNama" name="phone" value="{{ $registration->phone }}" placeholder="Masukkan Nomor HP anda">
                </div>
                <div class="col">
                    <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Email</label>
                    <input type="email" class="form-control" id="inputNama" name="email" value="{{ $registration->email }}" placeholder="Masukkan Email anda">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Posisi</label>
                @php
                $positions = App\Models\Position::active()->get();
            @endphp
                <select name="position" id="" class="form-control">
                    <option value="">Pilih Salah satu posisi yang diinginkan</option>
                    @foreach ($positions as $position)
                        <option value="{{$position->position_name}}" {{$registration->position == $position->position_name ? 'selected':""}}>{{$position->position_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">IPK Terakhir</label>
                <input type="number" class="form-control" id="inputNama" name="last_gpa" value="{{ $registration->last_gpa }}" step=".01" placeholder="Masukkan IPK Terakhir anda">
            </div>
            <button type="submit" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full ">Submit</button>
        </form>
    </div>
@endsection
