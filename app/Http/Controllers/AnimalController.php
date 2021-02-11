<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function store(Request $request)
    {
        $store = new Animal;
        $store->genre = $request->genre;
        $store->age = $request->age;
        $store->save();
        return redirect()->back();
    }
    public function show($id){
        $show=Animal::find($id);
        return view('show',compact('show'));
    }
    public function destroy($id){
        $destroy=Animal::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function edit($id){
        $edit = Animal::find($id);
        return view('edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Animal::find($id);
        $update->genre = $request->genre;
        $update->age = $request->age;
        $update->save();
        return redirect()->back();
    }
}
