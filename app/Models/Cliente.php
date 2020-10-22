<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'telefone'
    ];

    protected $table = 'clientes';
    public $timestamps = false;

    public function searching($search)
    {
        if ($search) {
            $result = $this->where(function ($query) use ($search) {
                $query->where('nome', 'LIKE', "%$search%")
                    ->orWhere('cpf', 'LIKE', "%$search%")
                    ->orWhere('endereco', 'LIKE', "%$search%")
                    ->orWhere('telefone', 'LIKE', "%$search%");
            })->get();
        } else {
            $result = $this->all();
        };
        return $result;
    }
}
