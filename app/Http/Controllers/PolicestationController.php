<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Policestation;
use Illuminate\Http\Request;

class PolicestationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policestations = Policestation :: all();
        return view('screens.cities')->with('policestations', $policestations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('screens.addnewpolicestation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Policestation::create($input);
        return redirect('cities')->with('flash_message', 'police_station Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $policestations = Policestation::find($id);
        $input = $request->all();
        $policestations->update($input);
        return redirect('cities')->with('flash_message', 'police_station Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Policestation::destroy($id);
        return redirect('cities')->with('flash_message', 'police_station deleted!');
    }
}
