<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class desicnation extends Model
{
    protected $fillable = [
        'name',
        'dep_id',
    ];
     public function department(){
        return $this->belongsTo(department::class);
     }
     public function contract(){
        return $this->hasMany(contract::class);
     }
     public function employee() {
        return $this->hasMany(employee::class);
     }
}
