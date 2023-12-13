<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use App\Models\Staff;
use Illuminate\Http\Request;

class ProyectController extends Controller
{
    public function index()
    {
        $proyects = Proyect::all();
        return view('proyect.index', compact('proyects'));
    }

    public function done(){
        $proyects = Proyect::where('estado', 'cerrado')->get();
        return view('proyect.index', compact('proyects'));
    }

    public function progress(){
        $proyects = Proyect::where('estado', 'ejecucion')->get();
        return view('proyect.index', compact('proyects'));
    }

    public function create()
    {
        $staffMembers = Staff::all();
        return view('proyect.create', compact('staffMembers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'staff_id' => 'required',
            'area_raiz' => 'required',
            'descripcion' => 'required',
            'areas_vinculadas' => 'required',
            'alcance' => 'required',
            'notas' => 'nullable',
            'estado' => 'required',
        ]);

        Proyect::create($request->all());

        return redirect()->route('proyect.index')
            ->with('success', 'Proyecto creado exitosamente.');
    }

    public function edit(Proyect $proyect)
    {
        $staffMembers = Staff::all();
        return view('proyect.edit', compact('proyect', 'staffMembers'));
    }

    public function update(Request $request, Proyect $proyect)
    {
        $request->validate([
            'staff_id' => 'required',
            'area_raiz' => 'required',
            'descripcion' => 'required',
            'areas_vinculadas' => 'required',
            'alcance' => 'required',
            'notas' => 'nullable',
            'estado' => 'required',
        ]);

        $proyect->update($request->all());

        return redirect()->route('proyect.index')
            ->with('success', 'Proyecto actualizado exitosamente.');
    }

    public function destroy(Proyect $proyect)
    {
        $proyect->delete();

        return redirect()->route('proyect.index')
            ->with('success', 'Proyecto eliminado exitosamente.');
    }
}
