<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        return view('empresas.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('empresas.roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'      => 'required|string|max:100|unique:roles,nombre',
            'descripcion' => 'nullable|string|max:255',
            'estado'      => 'required|in:Activo,Inactivo',
        ]);

        Rol::create($validated);

        return redirect()
            ->route('empresas.roles.index')
            ->with('success', 'Role created successfully.');
    }

    public function show(Rol $role)
    {
        return view('empresas.roles.show', compact('role'));
    }

    public function edit(Rol $role)
    {
        return view('empresas.roles.edit', compact('role'));
    }

    public function update(Request $request, Rol $role)
    {
        $validated = $request->validate([
            'nombre'      => 'required|string|max:100|unique:roles,nombre,' . $role->id,
            'descripcion' => 'nullable|string|max:255',
            'estado'      => 'required|in:Activo,Inactivo',
        ]);

        $role->update($validated);

        return redirect()
            ->route('empresas.roles.index')
            ->with('success', 'Role updated successfully.');
    }

    public function destroy(Rol $role)
    {
        $role->delete();

        return redirect()
            ->route('empresas.roles.index')
            ->with('success', 'Role deleted successfully.');
    }
}
