<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncounterType extends Model
{
    use HasFactory;

	public function encounter_pokemon() {
		return $this->belongsToMany(Pokemon::class, 'pokemon_encounter', 'encounter_type_id', 'pokemon_id');
	}

	public function encounter_locations() {
		return $this->belongsToMany(Location::class, 'pokemon_encounter', 'encounter_type_id', 'location_id');
	}

	public function encounter_games() {
		return $this->belongsToMany(Game::class, 'pokemon_encounter', 'encounter_type_id', 'game_id');
	}
}
