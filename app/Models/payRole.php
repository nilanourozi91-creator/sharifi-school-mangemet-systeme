<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payRole extends Model
{
    protected $fillable = [
        'year',
        'month',
        'school_id',
    ];
    public function schools(){
        return $this->belongsTo(school::class);
    }
     public function payments(){
        return $this->hasMany(payment::class);
    }
     public function salary(){
        return $this->hasMany(salary::class);
    }
}
