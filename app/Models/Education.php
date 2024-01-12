<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'region_id', 'education_name_uz', 'education_name_ru', 'education_name_en', 'specialization_uz', 'specialization_ru', 'specialization_en','enter_date','end_date'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function districtEducation(){
        return $this->belongsTo(DistrictEducation::class);
    }


}
