<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preco_da_compra',
        'data_da_entrada',
    ];
    protected $table = 'produtos';
    public $timestamps = false;

    public function searching($search)
    {
        if ($search) {
            $result = $this->where(function ($query) use ($search) {
                $query->where('nome', 'LIKE', "%$search%")
                    ->orWhere('preco_da_compra', 'LIKE', "%$search%")
                    ->orWhere('data_da_entrada', 'LIKE', "%$search%");
            })->get();
        } else {
            $result = $this->all();
        };
        return $result;
    }
}
