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
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'email' => 'required|email|unique:candidates,email',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'position' => 'nullable|string|max:100',
        'cv' => 'nullable|file|mimes:pdf|max:2048', // max 2MB
    ]);

    if ($request->hasFile('cv')) {
        $data['cv'] = $request->file('cv')->store('cvs', 'public');
    }

    Candidate::create($data);

    return redirect()->route('candidate.index')->with('success', 'Candidato creado correctamente.');
}

    public function edit(Candidate $candidate)
    {
        return view('candidate.edit', compact('candidate'));
    }

  public function update(Request $request, Candidate $candidate)
{
    $data = $request->validate([
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'email' => 'required|email|unique:candidates,email,' . $candidate->id,
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'position' => 'nullable|string|max:100',
        'cv' => 'nullable|file|mimes:pdf|max:2048',
    ]);

    if ($request->hasFile('cv')) {
        $data['cv'] = $request->file('cv')->store('cvs', 'public');
    }

    $candidate->update($data);

    return redirect()->route('candidate.index')->with('success', 'Candidato actualizado correctamente.');
}

    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return redirect()->route('candidate.index')->with('success', 'Candidato eliminado.');
    }

    public function show(Candidate $candidate)
{
    return view('candidate.show', compact('candidate'));
}
}
