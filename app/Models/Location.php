<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

	public function encounter_pokemon() {
		return $this->belongsToMany(Pokemon::class, 'pokemon_encounter', 'location_id', 'pokemon_id');
	}

	public function encounter_type() {
		return $this->belongsToMany(EncounterType::class, 'pokemon_encounter', 'location_id', 'encounter_type_id');
	}

	public function encounter_games() {
		return $this->belongsToMany(Game::class, 'pokemon_encounter', 'location_id', 'game_id');
	}

	public function games() {
		return $this->belongsToMany(Game::class);
	}

	public function region() {
		return $this->belongsTo(Region::class);
	}
}
