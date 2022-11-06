<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    protected $table = 'releases';

	protected $casts = [
		'release_date' => 'datetime'
	];

	public function game() {
		return $this->belongsTo(Game::class);
	}

	public function platforms() {
		return $this->belongsToMany(Platform::class);
	}

	public function country() {
		return $this->belongsTo(Country::class);
	}
}
