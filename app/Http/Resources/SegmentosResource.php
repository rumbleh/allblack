<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class Segmento extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        dd($request);
        return [
            "id" => $this["id"],
            "flick" => "flock",
            "descricao" => $this->descricao,
            "created_at" => Carbon::parse($this->created_at)->format('d/m/y'),
            "updated_at" => Carbon::parse($this->updated_at)->format('d/m/y'),
            "deleted_at" => Carbon::parse($this->deleted_at)->format('d/m/y'),
        ];
    }
}
