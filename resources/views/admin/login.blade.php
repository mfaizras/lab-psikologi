@extends('layouts.main')

@section('main_section')
    <div class="container px-4 mt-4 mb-4 p-3 bg-white rounded-lg">
        <h1 class="text-center text-3xl font-bold uppercase mb-5">Login Admin</h1>
        <form method="post" action="{{route('loginAction')}}">
            @csrf
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Email</label>
                <input type="email" class="form-control" id="inputNama" name="email" value="{{old('email')}}" placeholder="Masukkan Email anda">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label text-slate-700 font-medium text-sm">Password</label>
                <input type="password" class="form-control" id="inputNama" name="password" placeholder="Masukkan Password anda">
            </div>

            <button type="submit" class="bg-indigo-700 p-2 text-white font-medium w-full rounded-full">Login</button>
        </form>
</div>
@endsection
