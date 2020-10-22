<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{    
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
             'nome' => 'required|min:3|max:255',
             'preco_da_compra' => 'required|not_in:0',
             'data_da_entrada' => 'required',     
        ];
    }

    public function messages(){
        return [
            'preco_da_compra.not_in' => 'O campo preço não pode ser zero'
        ];
    }
}
