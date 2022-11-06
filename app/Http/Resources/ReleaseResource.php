<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReleaseResource extends JsonResource
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
			'country' => $this->country->name,
			'country_code' => $this->country->country_code,
			'release_date' => $this->release_date
		];
    }
}
