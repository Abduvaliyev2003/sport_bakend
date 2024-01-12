<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable=['name', 'district_education_id'];

    public function districtEducation(){
        return $this->belongsTo(DistrictEducation::class);
    }

    public function educations(){
        return $this->belongsToMany(Education::class, 'education_university');
    }

}
