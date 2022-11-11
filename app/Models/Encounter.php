<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    use HasFactory;

	public $with = ['location', 'encounter_type'];

	public function pokemon() {
		return $this->belongsTo(Pokemon::class);
	}

	public function game() {
		return $this->belongsTo(Game::class);
	}

	public function location() {
		return $this->belongsTo(Location::class);
	}

	public function encounter_type() {
		return $this->belongsTo(EncounterType::class);
	}
}
