<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit()
    {
        // Obtener el usuario con el ID proporcionado
        $user = User::find(auth()->user()->id);

        if (!$user) {
            // Manejar el caso en el que el usuario no se encuentre
            abort(404);
        }

        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Obtener el usuario con el ID proporcionado
        $user = User::find($id);

        if (!$user) {
            // Manejar el caso en el que el usuario no se encuentre
            abort(404);
        }

        // Actualizar los datos del usuario
        $user->update($request->all());

        // Redirigir a la vista de detalle del usuario o a donde desees
        return redirect()->route('gerente.index')->with('success', 'El Banco Exchange Auricoin, le informa que el cambio de datos se realizó exitosamente.');
    }

    public function showChangePasswordForm()
    {
        return view('user.change-password');
    }

    public function processChangePassword(Request $request)
    {
        return view('user.change-password-confirm');
    }


    public function updatePassword(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if (!$user) {
            abort(404);
        }

        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return redirect()->route('gerente.index')->with('success', 'El Banco Exchange Auricoin, le informa que su cambio de contraseña se realizó exitosamente.');
    }
}
