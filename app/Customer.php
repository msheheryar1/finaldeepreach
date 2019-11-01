<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table= "customers";
    protected $fillable= [
    'u_id','email','customer_id','s_id','due_date','plan','card_limit','card_remaining','status'
    ];
}
