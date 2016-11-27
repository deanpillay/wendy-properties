<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    protected $table = 'agents';

    protected $fillable = [
        'profile_pic','firstname', 'lastname', 'cellphone', 'email', 
    ];

    public function setNameAttribute($value){
        $this->attributes['firstname'] = ucfirst($value);
    }

    public function setLastNameAttribute($value){
        $this->attributes['lastname'] = ucfirst($value);
    }

}
