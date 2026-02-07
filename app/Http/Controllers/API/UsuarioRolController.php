<?php

namespace App\Http\Controllers;

use App\Models\UsuarioRol;
use Illuminate\Http\Request;

class UsuarioRolController extends Controller
{
    public function index()
    {
        return UsuarioRol::with(['usuario', 'rol', 'empresa'])->get();
    }

    public function store(Request $request)
    {
        UsuarioRol::create($request->all());
        return response()->json(['message' => 'Role assigned successfully'], 201);
    }

    public function destroy(Request $request)
    {
        UsuarioRol::where('id_usuario', $request->id_usuario)
            ->where('id_rol', $request->id_rol)
            ->where('id_empresa', $request->id_empresa)
            ->delete();

        return response()->json(['message' => 'Role assignment removed successfully']);
    }
}
