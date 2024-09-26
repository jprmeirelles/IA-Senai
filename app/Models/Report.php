<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function activities(){
        return $this->belongsToMany(Activity::class);
    }
}
