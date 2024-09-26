<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    use HasFactory;
    
    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function teachers(){
        return $this->belongsTo(Teacher::class);
    }

    public function activities(){
        return $this->hasMany(Activity::class);
    }
}