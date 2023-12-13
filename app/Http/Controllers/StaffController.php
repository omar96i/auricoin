<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffMembers = Staff::all();
        return view('staff.index', compact('staffMembers'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'nit' => 'required',
            'area' => 'required',
        ]);

        Staff::create($request->all());

        return redirect()->route('staff.index')
            ->with('success', 'Empleado creado exitosamente.');
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'full_name' => 'required',
            'nit' => 'required',
            'area' => 'required',
        ]);

        $staff->update($request->all());

        return redirect()->route('staff.index')
            ->with('success', 'Empleado actualizado exitosamente.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index')
            ->with('success', 'Empleado eliminado exitosamente.');
    }
}
