<?php

namespace App\Transformers;

use App\Comunidade;
use League\Fractal\TransformerAbstract;

class ComunidadeTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [

    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'produto'
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Comunidade $comunidade)
    {
        return [
            $comunidade->id,
            $comunidade->nome
        ];
    }
}
