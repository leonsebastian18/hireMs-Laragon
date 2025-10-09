<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\DocumentoCandidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentoCandidatoController extends Controller
{
    public function index(Candidate $candidate)
    {
        $documents = $candidate->documentos;
        return view('documents.index', compact('candidate', 'documents'));
    }

    public function create(Candidate $candidate)
    {
        return view('documents.create', compact('candidate'));
    }

    public function store(Request $request, Candidate $candidate)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:100',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = $request->file('file')->store('documents', 'public');

        DocumentoCandidato::create([
            'id_candidato' => $candidate->id,
            'tipo' => $validated['type'],
            'ruta' => $path,
        ]);

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Document uploaded successfully.');
    }

    public function edit(Candidate $candidate, DocumentoCandidato $document)
    {
        return view('documents.edit', compact('candidate', 'document'));
    }

    public function update(Request $request, Candidate $candidate, DocumentoCandidato $document)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:100',
        ]);

        $document->update([
            'tipo' => $validated['type'],
        ]);

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Document updated successfully.');
    }

    public function destroy(Candidate $candidate, DocumentoCandidato $document)
    {
        if ($document->ruta && Storage::disk('public')->exists($document->ruta)) {
            Storage::disk('public')->delete($document->ruta);
        }
        $document->delete();

        return back()->with('success', 'Document deleted successfully.');
    }
}
