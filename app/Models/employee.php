<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'firstname',
        'email',
        'des_id',
        'cart_id',
        'gender',
        
    ];
     public function discnation(){
        return $this->belongsTo(desicnation::class);
     }
     public function contract(){
        return $this->hasMany(contract::class);
     }
      public function salaries(){
        return $this->hasMany(salary::class);
     }
      public function payments(){
        return $this->hasMany(payment::class);
     }
}
