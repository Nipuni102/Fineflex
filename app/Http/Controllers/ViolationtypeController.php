<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Violationtype;

class ViolationtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $violationtypes = Violationtype::all();
        return view ('screens.violationtypes')->with('violationtypes', $violationtypes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('screens.addnewviolation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Violationtype::create($input);
        return redirect('vtypes')->with('flash_message', 'violation_type Addedd!');
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
        $violationtypes = Violationtype::find($id);
        return view('screens.editviolation')->with('violationtypes', $violationtypes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $violationtypes = Violationtype::find($id);
        $input = $request->all();
        $violationtypes->update($input);
        return redirect('vtypes')->with('flash_message', 'violationtype Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Violationtype::destroy($id);
        return redirect('vtypes')->with('flash_message', 'violationtype deleted!'); 
    }
}
