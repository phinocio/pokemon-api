<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

	public function releases() {
		return $this->hasMany(Release::class);
	}

	public function games() {
		return $this->hasManyThrough(Game::class, Release::class, 'country_id', 'id');
	}
}
