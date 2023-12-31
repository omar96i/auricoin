<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Staff;
use App\Models\Proyect;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index(Request $request)
    {
        $query = Maintenance::query();

        if ($request->has('proyect_search')) {
            $query->whereHas('proyect', function ($q) use ($request) {
                $q->where('area_raiz', 'like', '%' . $request->input('proyect_search') . '%');
            });
        }
        if ($request->has('estado_search')) {
            $query->where('estado', 'like', '%' . $request->input('estado_search') . '%');
        }

        $maintenances = $query->get();
        return view('maintenance.index', compact('maintenances'));
    }

    public function create()
    {
        $staffMembers = Staff::all();
        $proyects = Proyect::all();
        return view('maintenance.create', compact('staffMembers', 'proyects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'proyect_id' => 'required',
            'staff_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'estado' => 'required',
        ]);

        Maintenance::create($request->all());

        return redirect()->route('maintenance.index')
            ->with('success', 'Mantenimiento creado exitosamente.');
    }

    public function edit(Maintenance $maintenance)
    {
        $staffMembers = Staff::all();
        $proyects = Proyect::all();
        return view('maintenance.edit', compact('maintenance', 'staffMembers', 'proyects'));
    }

    public function update(Request $request, Maintenance $maintenance)
    {
        $request->validate([
            'proyect_id' => 'required',
            'staff_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'estado' => 'required',
        ]);

        $maintenance->update($request->all());

        return redirect()->route('maintenance.index')
            ->with('success', 'Mantenimiento actualizado exitosamente.');
    }

    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();

        return redirect()->route('maintenance.index')
            ->with('success', 'Mantenimiento eliminado exitosamente.');
    }
}
