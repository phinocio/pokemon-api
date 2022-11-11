<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EncounterResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param Request $request
	 * @return array
	 */
    public function toArray($request): array
	{
        return [
			'encounter_type' => $this->encounter_type->name,
			'game' => new GameResource($this->whenLoaded('game')),
			'location' => new LocationResource($this->whenLoaded('location')),
		];

    }
}
