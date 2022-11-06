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
			'releases' => ReleaseResource::collection($this->whenLoaded('releases')),
			'generation' => new GenerationResource($this->whenLoaded('generation')),
			'countries' => $this->whenLoaded('countries'),
			'platforms' => PlatformResource::collection($this->whenLoaded('platforms')),
			'links' => [
				'self' => config('app.url') . "/games/$this->id",
			]
		];
    }
}
