<?php

namespace App\Http\Resources;

use App\Http\Traits\LocaleTrait;
use App\Models\Direction;
use Illuminate\Http\Resources\Json\JsonResource;

class EvaluateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'direction_id'=>$this->direction_id,
            'direction_name'=>$this->directionCategory,
            'direction_category_id'=>$this->direction_category_id,
            'direction_category_name'=>$this->direction_category_name,
            'pdf'=>$this->pdf,
            'admin_permission'=>$this->admin_permission,
            'messages'=>$this->messages,
            'score'=>$this->score
        ];
    }
}
