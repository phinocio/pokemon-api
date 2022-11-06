<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

	protected $with = ['games'];

	public function releases() {
		return $this->belongsToMany(Release::class);
	}

	public function games() {
		return $this->belongsToMany(Game::class);
	}
}
