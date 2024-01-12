<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable=['name_uz', 'name_ru', 'name_en'];

    public function education(){
        return $this->hasMany(Education::class);
    }

    public function work(){
        return $this->hasMany(Work::class);
    }

    public function training(){
        return $this->hasMany(Training::class);
    }
}
