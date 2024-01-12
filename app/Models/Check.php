<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'direction_id', 'direction_category_id', 'direction_category_name','direction_category_name_answer', 'pdf', 'admin_permission', 'messages'];

    public function direction(){
        return $this->belongsTo(Direction::class);
    }

    public function directionCategory(){
        return $this->belongsTo(DirectionCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
