<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $table = 'leads';

    protected $fillable = [
        'firstname', 'lastname', 'email', 'message',
    ];

    public function setNameAttribute($value){
        $this->attributes['firstname'] = ucfirst($value);
    }

    public function setLastNameAttribute($value){
        $this->attributes['lastname'] = ucfirst($value);
    }
}
