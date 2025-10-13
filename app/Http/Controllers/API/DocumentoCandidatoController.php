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
        return view('candidates.documents.index', compact('candidate', 'documents'));
    }

    public function create(Candidate $candidate)
    {
        return view('candidates.documents.create', compact('candidate'));
    }

   public function store(Request $request, Candidate $candidate)
{
    $validated = $request->validate([
        'tipo_documento' => 'required|string|max:100',
        'nombre_archivo' => 'required|string|max:100',
        'archivo' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);

    $path = $request->file('archivo')->store('documents', 'public');

    DocumentoCandidato::create([
        'id_candidato' => $candidate->id,
        'tipo_documento' => $validated['tipo_documento'],
        'nombre_archivo' => $validated['nombre_archivo'],
        'url_archivo' => $path,
    ]);

    return redirect()->route('candidates.show', $candidate)
        ->with('success', 'Documento subido correctamente.');
}

public function update(Request $request, Candidate $candidate, DocumentoCandidato $document)
{
    $validated = $request->validate([
        'tipo_documento' => 'required|string|max:100',
        'nombre_archivo' => 'required|string|max:100',
        'archivo' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    $data = [
        'tipo_documento' => $validated['tipo_documento'],
        'nombre_archivo' => $validated['nombre_archivo'],
    ];

    if ($request->hasFile('archivo')) {
        if ($document->url_archivo && Storage::disk('public')->exists($document->url_archivo)) {
            Storage::disk('public')->delete($document->url_archivo);
        }
        $data['url_archivo'] = $request->file('archivo')->store('documents', 'public');
    }

    $document->update($data);

    return redirect()->route('candidates.show', $candidate)
        ->with('success', 'Documento actualizado correctamente.');
}


    public function edit(Candidate $candidate, DocumentoCandidato $document)
    {
        return view('candidates.documents.edit', compact('candidate', 'document'));
    }

    public function destroy(Candidate $candidate, DocumentoCandidato $document)
    {
        if ($document->url_archivo && Storage::disk('public')->exists($document->url_archivo)) {
            Storage::disk('public')->delete($document->url_archivo);
        }

        $document->delete();

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Document deleted successfully.');
    }
}
