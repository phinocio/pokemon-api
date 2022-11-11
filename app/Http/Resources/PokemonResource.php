<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PokemonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
	 */
    public function toArray($request)
    {
        return [
			'national_dex' => $this->natdex_num,
			'name' => $this->name,
			'games' => GameResource::collection($this->whenLoaded('games')),
			'encounters' => EncounterResource::collection($this->whenLoaded('encounters'))
		];
    }
}
