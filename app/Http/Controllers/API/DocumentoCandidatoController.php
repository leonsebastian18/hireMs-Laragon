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
            'tipo' => 'required|string|max:100',
            'archivo' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        // Guardar archivo en storage/app/public/documents
        $filename = time() . '_' . $request->file('archivo')->getClientOriginalName();
        $path = $request->file('archivo')->storeAs('documents', $filename, 'public');

        DocumentoCandidato::create([
            'id_candidato' => $candidate->id,
            'tipo' => $validated['tipo'],
            'nombre_archivo' => $filename,
            'url_archivo' => $path,
            'fecha_subida' => now(),
            'es_principal' => false,
        ]);

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Document uploaded successfully.');
    }

    public function edit(Candidate $candidate, DocumentoCandidato $document)
    {
        return view('candidates.documents.edit', compact('candidate', 'document'));
    }

    public function update(Request $request, Candidate $candidate, DocumentoCandidato $document)
    {
        $validated = $request->validate([
            'tipo' => 'required|string|max:100',
            'archivo' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $path = $document->url_archivo;
        $filename = $document->nombre_archivo;

        if ($request->hasFile('archivo')) {
            // Borrar archivo anterior si existe
            if ($document->url_archivo && Storage::disk('public')->exists($document->url_archivo)) {
                Storage::disk('public')->delete($document->url_archivo);
            }

            $filename = time() . '_' . $request->file('archivo')->getClientOriginalName();
            $path = $request->file('archivo')->storeAs('documents', $filename, 'public');
        }

        $document->update([
            'tipo' => $validated['tipo'],
            'nombre_archivo' => $filename,
            'url_archivo' => $path,
        ]);

        return redirect()->route('candidates.show', $candidate)
            ->with('success', 'Document updated successfully.');
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
