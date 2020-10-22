<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest as Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        return response()->json(['dados' => Cliente::all()]);
    }

    public function store(Request $request)
    {
        return Cliente::create($request->all());
    }

    public function update(Request $request, Cliente $cliente)
    {
        return response()->json(['cliente' => $cliente->update($request->all())]);
    }

    public function destroy(Cliente $cliente)
    {
        return response()->json(['cliente' => $cliente->delete()]);
    }

    public function search(Cliente $cliente)
    {
        return $cliente->searching(\Request::get('q')); 
    }
}
