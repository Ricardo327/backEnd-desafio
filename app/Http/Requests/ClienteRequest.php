<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ($this->method() === "POST") {
            return [
                'nome' => 'required|min:3|max:255',
                'cpf' => 'required|min:11|max:11|unique:clientes,cpf',
                'endereco' => 'required|min:3|max:255',
                'telefone' => 'required|min:3|max:20'
            ];
        } else {
            return [
                'nome' => 'required|min:3|max:255',
                'cpf' => 'required|min:11|max:11|unique:clientes,cpf,' . $this->id,
                'endereco' => 'required|min:3|max:255',
                'telefone' => 'required|min:3|max:20'
            ];
        }
    }
}
