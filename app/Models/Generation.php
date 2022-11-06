<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Generation extends Model
{
    use HasFactory;

	protected $with = ['games.releases', 'games.platforms'];

    public function games(): HasMany
	{
        return $this->hasMany(Game::class);
    }
}
