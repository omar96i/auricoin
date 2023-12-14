<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use App\Models\Staff;
use Illuminate\Http\Request;

class ProyectController extends Controller
{
    public function index(Request $request)
    {
        $query = Proyect::query();

        if ($request->has('employee_search')) {
            $query->whereHas('staff', function ($q) use ($request) {
                $q->where('full_name', 'like', '%' . $request->input('employee_search') . '%');
            });
        }

        if ($request->has('area_search')) {
            $query->where('area_raiz', 'like', '%' . $request->input('area_search') . '%');
        }

        if ($request->has('estado_search')) {
            $query->where('estado', 'like', '%' . $request->input('estado_search') . '%');
        }

        $proyects = $query->get();

        return view('proyect.index', compact('proyects'));
    }

    public function done(Request $request){
        $query = Proyect::query();

        if ($request->has('employee_search')) {
            $query->whereHas('staff', function ($q) use ($request) {
                $q->where('full_name', 'like', '%' . $request->input('employee_search') . '%');
            });
        }

        if ($request->has('area_search')) {
            $query->where('area_raiz', 'like', '%' . $request->input('area_search') . '%');
        }

        $query->where('estado', 'cerrado');

        $proyects = $query->get();

        return view('proyect.done', compact('proyects'));
    }

    public function progress(Request $request){
        $query = Proyect::query();

        if ($request->has('employee_search')) {
            $query->whereHas('staff', function ($q) use ($request) {
                $q->where('full_name', 'like', '%' . $request->input('employee_search') . '%');
            });
        }

        if ($request->has('area_search')) {
            $query->where('area_raiz', 'like', '%' . $request->input('area_search') . '%');
        }

        $query->where('estado', 'ejecucion');

        $proyects = $query->get();
        return view('proyect.progress', compact('proyects'));
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
            'areas_vinculadas' => 'required|array', // Cambiado a array
            'areas_vinculadas.*' => 'required', // Cada elemento del array es requerido
            'alcance' => 'required',
            'notas' => 'nullable',
            'estado' => 'required',
        ]);


        Proyect::create([
            'staff_id' => $request->input('staff_id'),
            'area_raiz' => $request->input('area_raiz'),
            'descripcion' => $request->input('descripcion'),
            'areas_vinculadas' => implode(',', $request->input('areas_vinculadas')),
            'alcance' => $request->input('alcance'),
            'notas' => $request->input('notas'),
            'estado' => $request->input('estado'),
        ]);

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
            'areas_vinculadas' => 'required|array',
            'areas_vinculadas.*' => 'required',
            'alcance' => 'required',
            'notas' => 'nullable',
            'estado' => 'required',
        ]);

        $proyect->update([
            'staff_id' => $request->input('staff_id'),
            'area_raiz' => $request->input('area_raiz'),
            'descripcion' => $request->input('descripcion'),
            'areas_vinculadas' => implode(',', $request->input('areas_vinculadas')),
            'alcance' => $request->input('alcance'),
            'notas' => $request->input('notas'),
            'estado' => $request->input('estado'),
            'descripcion_estado' => $request->input('descripcion_estado'),
        ]);

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
