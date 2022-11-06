<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GenerationResource extends JsonResource
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
			'name' => $this->name,
			'new_pokemon' => $this->new_pokemon,
			'total_pokemon' => $this->total_pokemon,
			'new_moves' => $this->new_moves,
			'total_moves' => $this->total_moves,
			'new_abilities' => $this->new_abilities,
			'total_abilities' => $this->total_abilities,
			'games' => GameResource::collection($this->whenLoaded('games')),
			'links' => [
				'self' => config('app.url') . "/generations/$this->id",
			]
		];
    }
}
