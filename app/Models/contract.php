<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    protected $fillable = [
        'des_id',
        'employee_id',
        'start_date',
        'end_date'
    ];
    public function employee(){
        return $this->belongsTo(employee::class);
    }
      public function desicnation(){
        return $this->belongsTo(desicnation::class);
    }
}
