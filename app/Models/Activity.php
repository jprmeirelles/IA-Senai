<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function teams(){
        return $this->belongsTo(Team::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
