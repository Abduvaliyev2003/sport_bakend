<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasport extends Model
{
    use HasFactory;
    protected $fillable = ['pnfl','pasport_seria','pasport_seria_code'];

    public function user(){
        return $this->hasOne(User::class);
    }
    public function personalInfo(){
        return $this->hasOne(PersonalInfo::class);
    }
}
