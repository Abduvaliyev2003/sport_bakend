<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPdf extends Model
{
    use HasFactory;
    protected $fillable=['direction_category_id', 'user_id', 'pdf'];

    public function directionCategory(){
        return $this->belongsTo(DirectionCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
