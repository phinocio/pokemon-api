<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
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
			'name' => $this->name,
			'region' => new RegionResource($this->whenLoaded('region')),
			'games' => GameResource::collection($this->whenLoaded('game')),
			'links' => [
				'self' => config('app.url') . "/locations/$this->id",
			]
		];
    }
}
