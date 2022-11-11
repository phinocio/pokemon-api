<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EvolutionResource extends JsonResource
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
			'evolution' => new PokemonResource($this->evolved_pokemon),
			'method' => $this->evolution_method->name,
			'level' => $this->level,
			'item' => $this->item,
			'trade' => $this->trade,
			'friendship' => $this->friendship
		];
	}
}
