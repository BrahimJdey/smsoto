<?php

namespace App\Http\Controllers;

use App\Models\progsms;
use Illuminate\Http\Request;

class PlaySMSController extends Controller
{

    //programmer un sms
    public function progsms()
    {
        $items = progsms::all();
        return view('progsms.progsms',['items' => $items]);
    }
    
    public function create()
    {
        return view('progsms.create');
    }

    public function store(Request $request)
{
    $items = new progsms();
    $items->name = $request->input('name');
    $items->message = $request->input('message');
    $items->schedule_rule = $request->input('schedule_rule');
    $items->save();

    return redirect('progsms');
}

    public function show($id)
    {
        $item = progsms::findOrFail($id);
        return view('progsms.show', compact('item'));
    }

    public function edit($id)
    {
        $items = progsms::findOrFail($id);
        return view('progsms.edit',['items' => $items]);
    }

    public function update(Request $request, $id)
    {
        
        $items = progsms::findOrFail($id);
        $items->name = $request->input('name');
        $items->message = $request->input('message');
       
        $items->save();
        return redirect('progsms');
    }

    public function destroy($id)
    {
        $item = progsms::findOrFail($id);
        $item->delete();
        return redirect('/progsms');
    }
}
