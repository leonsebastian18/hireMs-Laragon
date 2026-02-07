<?php

namespace App\Http\Controllers\API;;
use App\Http\Controllers\Controller;
use App\Models\UsuarioSistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioSistemaController extends Controller
{
    public function index()
    {
        $users = UsuarioSistema::all();
        return view('empresas.system-users.index', compact('users'));
    }

    public function create()
    {
        return view('empresas.system-users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'    => 'required|string|max:80',
            'apellido'  => 'required|string|max:80',
            'email'     => 'required|email|max:100|unique:usuarios_sistema,email',
            'password'  => 'required|string|min:8|confirmed',
            'telefono'  => 'nullable|string|max:20',
            'estado'    => 'required|in:Activo,Inactivo,Suspendido',
        ]);

        UsuarioSistema::create([
            'nombre'         => $validated['nombre'],
            'apellido'       => $validated['apellido'],
            'email'          => $validated['email'],
            'password_hash'  => Hash::make($validated['password']),
            'telefono'       => $validated['telefono'] ?? null,
            'estado'         => $validated['estado'],
            'fecha_registro' => now(),
        ]);

        return redirect()
            ->route('empresas.system-users.index')
            ->with('success', 'User created successfully.');
    }

    public function show(UsuarioSistema $user)
    {
        return view('empresas.system-users.show', compact('user'));
    }

    public function edit(UsuarioSistema $user)
    {
        return view('empresas.system-users.edit', compact('user'));
    }

    public function update(Request $request, UsuarioSistema $user)
    {
        $validated = $request->validate([
            'nombre'    => 'required|string|max:80',
            'apellido'  => 'required|string|max:80',
            'email'     => 'required|email|max:100|unique:usuarios_sistema,email,' . $user->id,
            'password'  => 'nullable|string|min:8|confirmed',
            'telefono'  => 'nullable|string|max:20',
            'estado'    => 'required|in:Activo,Inactivo,Suspendido',
        ]);

        $data = [
            'nombre'   => $validated['nombre'],
            'apellido' => $validated['apellido'],
            'email'    => $validated['email'],
            'telefono' => $validated['telefono'] ?? null,
            'estado'   => $validated['estado'],
        ];

        if (!empty($validated['password'])) {
            $data['password_hash'] = Hash::make($validated['password']);
        }

        $user->update($data);

        return redirect()
            ->route('empresas.system-users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(UsuarioSistema $user)
    {
        $user->delete();

        return redirect()
            ->route('empresas.system-users.index')
            ->with('success', 'User deleted successfully.');
    }
}
