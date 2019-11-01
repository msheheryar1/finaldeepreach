<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    //
    protected $table="domains";

    protected $fillable=[
    	'u_id','domain'
    ];
    
    public $timestamps = false;
    
}
