<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

	protected $with = ['releases', 'platforms'];

    public function generation() {
        return $this->belongsTo(Generation::class);
    }

	public function releases() {
		return $this->hasMany(Release::class);
	}

	public function platforms() {
		return $this->belongsToMany(Platform::class);
	}
}
