<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{

	/**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
	 */
    public function toArray($request): array
	{
        return [
			'name' => $this->name,
			'generation' => new GenerationResource($this->whenLoaded('generation')),
			'regions' => RegionResource::collection($this->whenLoaded('regions')),
			'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
			'platforms' => PlatformResource::collection($this->whenLoaded('platforms')),
			'releases' => ReleaseResource::collection($this->whenLoaded('releases')),
			'countries' => $this->whenLoaded('countries'),
			'encounters' => EncounterResource::collection($this->whenLoaded('encounters')),
			'links' => [
				'self' => config('app.url') . "/games/$this->id",
			]
		];
    }
}
