<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;
    public $table="directions";
    protected $fillable=['title'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'direction_user');
    }

    public function directionCategory(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DirectionCategory::class);
    }

    public function check(){
        return $this->hasMany(Check::class);
    }
}
