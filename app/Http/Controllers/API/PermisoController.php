<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function index()
    {
        $permissions = Permiso::all();
        return view('empresas.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('empresas.permissions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'      => 'required|string|max:100|unique:permisos,nombre',
            'descripcion' => 'nullable|string|max:255',
            'modulo'      => 'required|string|max:50',
            'estado'      => 'required|in:Activo,Inactivo',
        ]);

        Permiso::create($validated);

        return redirect()
            ->route('empresas.permissions.index')
            ->with('success', 'Permission created successfully.');
    }

    public function show(Permiso $permission)
    {
        return view('empresas.permissions.show', compact('permission'));
    }

    public function edit(Permiso $permission)
    {
        return view('empresas.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permiso $permission)
    {
        $validated = $request->validate([
            'nombre'      => 'required|string|max:100|unique:permisos,nombre,' . $permission->id,
            'descripcion' => 'nullable|string|max:255',
            'modulo'      => 'required|string|max:50',
            'estado'      => 'required|in:Activo,Inactivo',
        ]);

        $permission->update($validated);

        return redirect()
            ->route('empresas.permissions.index')
            ->with('success', 'Permission updated successfully.');
    }

    public function destroy(Permiso $permission)
    {
        $permission->delete();

        return redirect()
            ->route('empresas.permissions.index')
            ->with('success', 'Permission deleted successfully.');
    }
}
