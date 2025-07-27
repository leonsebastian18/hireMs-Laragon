<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        return Candidate::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'cv' => 'nullable|string|max:255',
        ]);

        $candidate = Candidate::create($data);

        return response()->json($candidate, 201);
    }

    public function show(Candidate $candidate)
    {
        return $candidate;
    }

    public function update(Request $request, Candidate $candidate)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'cv' => 'nullable|string|max:255',
        ]);

        $candidate->update($data);

        return $candidate;
    }

    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}
