<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Empresa;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(Request $request)
    {
        $empresaId = $request->get('empresa');

        $departments = Departamento::with('empresa')
            ->when($empresaId, function ($query) use ($empresaId) {
                $query->where('id_empresa', $empresaId);
            })
            ->get();

        return view('empresas.departments.index', compact('departments'));
    }

    public function create()
    {
        $companies = Empresa::all();
        return view('empresas.departments.create', compact('companies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'     => 'required|string|max:100',
            'descripcion'=> 'nullable|string',
            'id_empresa' => 'required|exists:empresas,id',
        ]);

        Departamento::create($validated);

        return redirect()
            ->route('empresas.departments.index', ['empresa' => $validated['id_empresa']])
            ->with('success', 'Department created successfully.');
    }

    public function show(Departamento $department)
    {
        return view('empresas.departments.show', compact('department'));
    }

    public function edit(Departamento $department)
    {
        $companies = Empresa::all();
        return view('empresas.departments.edit', compact('department', 'companies'));
    }

    public function update(Request $request, Departamento $department)
    {
        $validated = $request->validate([
            'nombre'     => 'required|string|max:100',
            'descripcion'=> 'nullable|string',
            'id_empresa' => 'required|exists:empresas,id',
        ]);

        $department->update($validated);

        return redirect()
            ->route('empresas.departments.index', ['empresa' => $validated['id_empresa']])
            ->with('success', 'Department updated successfully.');
    }

    public function destroy(Departamento $department)
    {
        $department->delete();

        return redirect()
            ->back()
            ->with('success', 'Department deleted successfully.');
    }
}
