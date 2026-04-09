<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    protected $fillable = [
       'gross_salary',
       'employee_id',
       'payrole_id',
    ];

      public function employee(){
        return $this->belongsTo(employee::class);
      }
         public function payrole(){
        return $this->belongsTo(payRole::class);
      }
}
