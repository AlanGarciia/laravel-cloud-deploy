<?php

namespace App\Http\Controllers;

use App\Models\Cicle;
use Illuminate\Http\Request;

class CicleController extends Controller
{
    public function create()
    {
        return view('cicles.create');
    }

    public function store(Request $request){
    $request->validate([
        'code' => 'required|string|max:10|min:3',
        'name' => 'required|string|max:255|min:3',
        'description' => 'required|string|max:1000|min:5',
        'nomCursos' => 'required|integer|min:1',
        'image' => 'required|url'
    ]);

    $cicle = new Cicle();
    $cicle->code = $request->code;
    $cicle->name = $request->name;
    $cicle->description = $request->description;
    $cicle->nomCursos = $request->nomCursos;
    $cicle->image = $request->image;
    $cicle->save();

    return redirect()->route('dashboard')->with('success', 'Cicle creat exitosament');
}

    public function show(Cicle $cicle)
    {
        return view('cicles.show', ['cicle' => $cicle]);
    }

    public function destroy(Cicle $cicle){

        $cicle->delete();
        return redirect()->route('dashboard');

    }
}


