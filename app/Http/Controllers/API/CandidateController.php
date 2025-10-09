<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Display a listing of the candidates.
     */
    public function index()
    {
        $candidates = Candidate::latest()->get();
        return view('candidates.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new candidate.
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created candidate in the database.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:80',
            'apellido' => 'required|string|max:80',
            'email' => 'required|email|unique:candidates,email',
            'telefono' => 'nullable|string|max:20',
            'fecha_nacimiento' => 'nullable|date',
            'genero' => 'nullable|string',
            'estado_civil' => 'nullable|string',
            'direccion' => 'nullable|string|max:200',
            'ciudad' => 'nullable|string|max:50',
            'pais' => 'nullable|string|max:50',
            'disponibilidad_inicio' => 'nullable|date',
            'modalidad_preferida' => 'nullable|string',
            'expectativa_salarial' => 'nullable|numeric',
            'estado' => 'nullable|string',
        ]);

        $candidate = Candidate::create($data);
        return redirect()->route('candidates.index')->with('success', 'Candidate created successfully.');
    }

    /**
     * Display the specified candidate.
     */
    public function show(Candidate $candidate)
    {
        $candidate->load(['documentos', 'experiencias', 'educaciones', 'competencias']);
        return view('candidates.show', compact('candidate'));
    }

    /**
     * Show the form for editing the specified candidate.
     */
    public function edit(Candidate $candidate)
    {
        return view('candidates.edit', compact('candidate'));
    }

    /**
     * Update the specified candidate in the database.
     */
    public function update(Request $request, Candidate $candidate)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:80',
            'apellido' => 'required|string|max:80',
            'email' => 'required|email|unique:candidates,email,' . $candidate->id,
            'telefono' => 'nullable|string|max:20',
            'fecha_nacimiento' => 'nullable|date',
            'genero' => 'nullable|string',
            'estado_civil' => 'nullable|string',
            'direccion' => 'nullable|string|max:200',
            'ciudad' => 'nullable|string|max:50',
            'pais' => 'nullable|string|max:50',
            'disponibilidad_inicio' => 'nullable|date',
            'modalidad_preferida' => 'nullable|string',
            'expectativa_salarial' => 'nullable|numeric',
            'estado' => 'nullable|string',
        ]);

        $candidate->update($data);

        return redirect()->route('candidates.index')->with('success', 'Candidate updated successfully.');
    }

    /**
     * Remove the specified candidate from the database.
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        return redirect()->route('candidates.index')->with('success', 'Candidate deleted successfully.');
    }
}
