<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'full_name','email','phone', 'gender', 'birth_date', 'nationality', 'pasport_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pasport(){
        return $this->belongsTo(Pasport::class);
    }


}
