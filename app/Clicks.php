<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clicks extends Model
{
    //
    protected $table="countries_clicks";

    protected $fillable=[
    	'card_id','country','social'
    ];
    
    
}
