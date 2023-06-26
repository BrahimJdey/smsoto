<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupe = Groupe::all();
        return view('groupe.index')-> with('groupe',$groupe );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groupe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Groupe::create($input);
        return redirect('groupe')->with('flash_message', 'contact addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groupe = Groupe::find($id);
        return view('groupe.show')->with('groupe', $groupe);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $groupe = Groupe::find($id);
        return view('groupe.edit')->with('groupe', $groupe);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $groupe = Groupe::find($id);
        $input = $request->all();
        $groupe->update($input);
        return redirect('groupe')->with('flash_message', 'groupe update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Groupe::destroy($id);
        return redirect('groupe')->with('flash_message', 'groupe delete');
    }
}
