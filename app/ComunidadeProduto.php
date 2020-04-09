<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComunidadeProduto extends Model
{
    protected $table = "comunidade_produto";

    protected $fillable = [
        'produto_id', 'comunidade_id', 'estoque', 'preco', 'comissao'
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }

    public function comunidades()
    {
        return $this->belongsToMany(Comunidade::class);
    }


}
