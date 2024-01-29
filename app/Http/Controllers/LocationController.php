<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.location.index',[
            'datas' => Location::all(),
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
        if (isset($request['location'])) {
            foreach ($request['location'] as $location) {
                if(isset($location['status'])){
                    $location['status'] = 1;
                } else {
                    $location['status'] = 0;
                }
                Location::updateOrCreate(
                        ['id' => $location['id']],
                        [
                            'location_name' => $location['location_name'],
                            'status' => $location['status'],
                        ]
                    );
            }
        }
        return redirect()->route('location')->with('status', 'Data Berhasil diubah / ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('participantList');
    }
}
