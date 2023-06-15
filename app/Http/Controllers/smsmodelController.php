<?php

namespace App\Http\Controllers;
use App\Models\smsmodel;
use Illuminate\Http\Request;

class smsmodelController extends Controller
{
    //programmer un sms
    public function showData()
    {
        $data = smsmodel::all();

        return view('smsmodel.index', ['items' => $data]);
    }
     
    
    public function create()
    {
        return view('smsmodel.create');
    }

    public function store(Request $request)
    {
        $items = new smsmodel();
        $items->t_title = $request->input('t_title');
        $items->t_text = $request->input('t_text');
        $items->save();

        return redirect('/showData');
    }

    public function show($id)
    {
        $item = smsmodel::findOrFail($id);
        return view('smsmodel.show', compact('item'));
    }

    public function edit($id)
    {
        $item = smsmodel::findOrFail($id);
        return view('smsmodel.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the data from the request
    }

    public function destroy($id)
    {
        $items = smsmodel::findOrFail($id);
        $items->delete();
        return redirect('/showData');
    }
}
