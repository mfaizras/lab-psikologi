<?php

namespace App\Http\Controllers;

use App\Exports\ParticipantExport;
use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class AdminRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.register.index',[
            'datas' => Registration::all(),
            'title' => 'Data Pendaftar'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        return view('admin.register.show',[
            'title' => 'Detail Peserta',
            'data' => $registration
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        return view('admin.register.edit',[
            'title' => 'Edit Data Peserta',
            'registration' => $registration
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'npm' => 'required',
            'class' => 'required',
            'major' => 'required',
            'location' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'position' => 'required',
            'last_gpa' => 'required',
        ],$messages = [
            '*.required' => 'Input :attribute Harus Diisi',
            '*.unique' => ':attribute Sudah Didaftarkan Sebelumnya',
        ],
        $attributes = [
            'name' => 'Nama',
            'npm' => 'NPM',
            'class' => 'Kelas',
            'major' => 'Jurusan',
            'location' => 'Lokasi Kampus',
            'birth_place' => 'Tempat Lahir',
            'birth_date' => 'Tahun Lahir',
            'gender' => 'Jenis Kelamin',
            'address' => 'Alamat',
            'phone' => 'No Telepon',
            'email' => 'Email',
            'position' => 'Posisi',
            'last_gpa' => 'IPK Terkahir',
        ]
    );

    $registration->update($validatedData);

    return redirect()->route('participantList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        $directory = $registration->npm.'-'.$registration->name;
        $registration->delete();
        Storage::disk('public')->deleteDirectory($directory);
        return redirect()->route('participantList');
    }

    public function export(){
        // echo 'test';
        return Excel::download(new ParticipantExport, 'Data Pendaftar - '.Carbon::now().'.xlsx');
    }

}
