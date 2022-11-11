<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvolutionMethod extends Model
{
    use HasFactory;

	public function evolutions() {
		return $this->hasMany(Evolution::class);
	}
}
