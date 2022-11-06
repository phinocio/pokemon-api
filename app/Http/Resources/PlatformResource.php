<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlatformResource extends JsonResource
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
			'games' => GameResource::collection($this->whenLoaded('games')),
			'links' => [
				'self' => config('app.url') . "/platforms/$this->id",
			]
		];
    }
}
