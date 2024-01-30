<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration.index',[
            'title' => 'Form Pendaftaran'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'npm' => 'required|unique:App\Models\Registration',
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
            'cv_path' => 'required|file|mimes:pdf|extensions:pdf',
            'krs_path' => 'required|file|mimes:pdf|extensions:pdf',
            'photo_path' => 'required|file|mimes:jpg,png,bmp,pdf|extensions:jpg,png,bmp,pdf',
            'student_card_path' => 'required|file|mimes:pdf|extensions:pdf',
            'identity_path' => 'required|file|mimes:pdf|extensions:pdf',
            'score_path' => 'required|file|mimes:pdf|extensions:pdf',
            'certificate_path' => 'file|mimes:pdf|extensions:pdf',
        ],$messages = [
            '*.required' => 'Input :attribute Harus Diisi',
            '*.unique' => ':attribute Sudah Didaftarkan Sebelumnya',
            '*.file' => ':attribute Bukan File Yang Valid',
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
            'cv_path' => 'CV',
            'krs_path' => 'KRS',
            'photo_path' => 'Pas Foto',
            'student_card_path' => 'KTM',
            'identity_path' => 'KTP',
            'score_path' => 'Rangkuman Nilai',
            'certificate_path' => 'Sertifikat',
        ]
    );

        $fileName = $request->npm.'-'.$request->name;
        $disk = 'public';

        $validatedData['cv_path'] = $request->file('cv_path')->storeAs($fileName,$fileName.'-CV.'.$request->file('cv_path')->extension(),$disk);
        $validatedData['krs_path'] = $request->file('krs_path')->storeAs($fileName,$fileName.'-KRS.'.$request->file('krs_path')->extension(),$disk);
        $validatedData['photo_path'] = $request->file('photo_path')->storeAs($fileName,$fileName.'-Foto.'.$request->file('photo_path')->extension(),$disk);
        $validatedData['student_card_path'] = $request->file('student_card_path')->storeAs($fileName,$fileName.'-KTM.'.$request->file('student_card_path')->extension(),$disk);
        $validatedData['identity_path'] = $request->file('identity_path')->storeAs($fileName,$fileName.'-KTP.'.$request->file('identity_path')->extension(),$disk);
        $validatedData['score_path'] = $request->file('score_path')->storeAs($fileName,$fileName.'-Rangkuman Nilai.'.$request->file('score_path')->extension(),$disk);
        if($request->hasFile('certificate_path')){
            $validatedData['certificate_path'] = $request->file('certificate_path')->storeAs($fileName,$fileName.'-Sertifikat.'.$request->file('certificate_path')->extension(),$disk);
        }

        $registerProcess = Registration::create($validatedData);

        return view('registration.success');
    }
}
