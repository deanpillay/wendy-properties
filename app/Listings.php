<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    protected $table = 'listings';

    protected $fillable = [
        'listing_pic','price', 'num_of_bedrooms', 'heading', 'description', 'surburb', 'agent_name', 
    ];

    public function setHeadingAttribute($value){
        $this->attributes['heading'] = ucfirst($value);
    }
}
