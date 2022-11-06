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
			'move_sets' => [
				[
					'game' => 'Green',
					'moves' => [
						[
							'name' => 'Tackle',
							'level_learned' => 1,
							'learn_method' => 'level-up'
						],
						[
							'name' => 'Growl',
							'level_learned' => 1,
							'learn_method' => 'level-up'
						],
						[
						'name' => 'Leech Seed',
						'level_learned' => 7,
						'learn_method' => 'level-up'
					]
					]
				],
				[
					'game' => 'Red',
					'moves' => [
						[
							'name' => 'Tackle',
							'level_learned' => 1,
							'learn_method' => 'level-up'
						],
						[
							'name' => 'Growl',
							'level_learned' => 1,
							'learn_method' => 'level-up'
						],
						[
							'name' => 'Leech Seed',
							'level_learned' => 7,
							'learn_method' => 'level-up'
						]
					]
				]
			]
		];
    }
}
