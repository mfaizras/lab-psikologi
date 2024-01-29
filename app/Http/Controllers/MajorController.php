<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.major.index',[
            'datas' => Major::all(),
            'title' => 'Lokasi Kampus'
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
        if (isset($request['major'])) {
            foreach ($request['major'] as $major) {
                if(isset($major['status'])){
                    $major['status'] = 1;
                } else {
                    $major['status'] = 0;
                }
                Major::updateOrCreate(
                        ['id' => $major['id']],
                        [
                            'major_name' => $major['major_name'],
                            'status' => $major['status'],
                        ]
                    );
            }
        }
        return redirect()->route('major')->with('status', 'Data Berhasil diubah / ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('participantList');
    }
}
