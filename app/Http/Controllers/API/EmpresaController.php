<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;


class EmpresaController extends Controller
{
     public function index()
    {
        $companies = Empresa::all();
        return view('empresas.index', compact('companies'));
    }

    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'       => 'required|string|max:100',
            'descripcion'  => 'nullable|string',
            'sector'       => 'nullable|string|max:50',
            'tamano'       => 'nullable|in:Startup,Pequeña,Mediana,Grande',
            'direccion'    => 'nullable|string|max:200',
            'telefono'     => 'nullable|string|max:20',
            'email'        => 'nullable|email|max:100',
            'sitio_web'    => 'nullable|string|max:100',
            'estado'       => 'required|in:Activa,Inactiva',
        ]);

        $validated['fecha_registro'] = now();

        Empresa::create($validated);

        return redirect()
            ->route('empresas.index')
            ->with('success', 'Company created successfully.');
    }

    public function show(Empresa $empresa)
{
    return view('empresas.show', ['company' => $empresa]);
}

public function edit(Empresa $empresa)
{
    return view('empresas.edit', ['company' => $empresa]);
}

public function update(Request $request, Empresa $empresa)
{
    $validated = $request->validate([
        'nombre'       => 'required|string|max:100',
        'descripcion'  => 'nullable|string',
        'sector'       => 'nullable|string|max:50',
        'tamano'       => 'nullable|in:Startup,Pequeña,Mediana,Grande',
        'direccion'    => 'nullable|string|max:200',
        'telefono'     => 'nullable|string|max:20',
        'email'        => 'nullable|email|max:100',
        'sitio_web'    => 'nullable|string|max:100',
        'estado'       => 'required|in:Activa,Inactiva',
    ]);

    $empresa->update($validated);

    return redirect()
        ->route('empresas.index')
        ->with('success', 'Company updated successfully.');
}

public function destroy(Empresa $empresa)
{
    $empresa->delete();

    return redirect()
        ->route('empresas.index')
        ->with('success', 'Company deleted successfully.');
}
}
