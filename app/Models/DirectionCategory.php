<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectionCategory extends Model
{
    use HasFactory;
    protected $fillable=['direction_id', 'category', 'sub_category', 'pdf'];

    protected $casts = [
        'sub_category' => 'array',
    ];

    public function direction(){
        return $this->belongsTo(Direction::class);
    }

    public function userPdf(){
        return $this->hasMany(UserPdf::class);
    }

    public function check(){
        return $this->hasMany(Check::class);
    }
}
