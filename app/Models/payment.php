<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [
         'employee_is',
         'payrole_id',
         'payment_Date',
         'payment_mathod',
         'amount',
    ];
     public function payrole(){
        return $this->belongsTo(payRole::class);
     }
       public function employee(){
        return $this->belongsTo(employee::class);
     }
    
}
