<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.position.index',[
            'datas' => Position::all(),
            'title' => 'Posisi'
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
        if (isset($request['position'])) {
            foreach ($request['position'] as $position) {
                if(isset($position['status'])){
                    $position['status'] = 1;
                } else {
                    $position['status'] = 0;
                }
                Position::updateOrCreate(
                        ['id' => $position['id']],
                        [
                            'position_name' => $position['position_name'],
                            'status' => $position['status'],
                        ]
                    );
            }
        }
        return redirect()->route('position')->with('status', 'Data Berhasil diubah / ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('participantList');
    }
}
