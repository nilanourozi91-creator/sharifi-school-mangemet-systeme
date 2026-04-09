<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable = [
        'name',
        'school_id',

    ];
      public function schools(){
        return $this->belongsTo(school::class);
    }
    public function desicnation(){
        return $this->hasMany(desicnation::class);
    }
      public function employees(){
        return $this->HasManyThrough(employee::class , desicnation::class);
    }
    public function department() {
        return $this->belongsTo(school::class);
    }
}
