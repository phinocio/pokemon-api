<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolution extends Model
{
    use HasFactory;

	public function pokemon() {
		return $this->belongsTo(Pokemon::class);
	}

	public function evolved_pokemon() {
		return $this->belongsTo(Pokemon::class, 'evolved_pokemon_id');
	}

	public function evolution_method() {
		return $this->belongsTo(EvolutionMethod::class);
	}
}
