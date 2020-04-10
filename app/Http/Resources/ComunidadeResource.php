<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\Eloquent\SoftDeletes;

class SegmentosResource extends JsonResource
{
    use SoftDeletes;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "descricao" => $this->descricao,
//            "created_at" => Carbon::parse($this->created_at)->format('d/m/Y H:i'),
//            "updated_at" => Carbon::parse($this->updated_at)->format('d/m/Y H:i'),
//            "deleted_at" => $this->deleted_at !== null ? Carbon::parse($this->deleted_at)->format('d/m/Y') : null,
        ];
    }
}
