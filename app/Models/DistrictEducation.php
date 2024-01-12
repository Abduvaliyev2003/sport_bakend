<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictEducation extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function education(){
        return $this->hasMany(Education::class);
    }

}
