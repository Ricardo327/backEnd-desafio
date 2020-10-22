<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ProdutoRequest as Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        return response()->json(['dados' => Produto::all()]);
    }

    public function store(Request $request)
    {
       return Produto::create($request->all());
    } 

    public function update(Request $request, Produto $produto)
    {
        return response()->json(['produto' => $produto->update($request->all())]);
    }

    public function destroy(Produto $produto)
    {
        return response()->json(['produto' => $produto->delete()]);
    }

    public function search(Produto $produto)
    {  
       return $produto->searching(\Request::get('q'));    
    }
}
