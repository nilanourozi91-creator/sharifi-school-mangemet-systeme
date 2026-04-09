<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $fillable = [
        'name',
        'Whatsapp_Link',
    ];
    public function user(){
       return $this->belongsToMany(User::class,'school_user');
    }
    public function deparments(){
       return $this->hasMany(department::class);
    }
    public function destnation(){
        return $this->through('deparments')->has('desicnation');
    }
     public function payrole(){
        return $this->hasMany(payRole::class);
    }
}
