<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return view('candidate.index', compact('candidates'));
    }

    public function create()
    {
        return view('candidate.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'cv' => 'nullable|string|max:255',
        ]);

        Candidate::create($data);

        return redirect()->route('candidate.index')->with('success', 'Candidato creado exitosamente.');
    }

    public function edit(Candidate $candidate)
    {
        return view('candidate.edit', compact('candidate'));
    }

    public function update(Request $request, Candidate $candidate)
    {
        $data = $request->validate([
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'cv' => 'nullable|string|max:255',
        ]);

        $candidate->update($data);

        return redirect()->route('candidate.index')->with('success', 'Candidato actualizado correctamente.');
    }

    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return redirect()->route('candidate.index')->with('success', 'Candidato eliminado.');
    }
}
