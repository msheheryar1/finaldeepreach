<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $table="cards";

    protected $fillable=[
    	'user_id','title','description','card_size','fb_image','twitter_image','linkedin_image','slack_image','pinterest_image','social','fb_clicks','tw_clicks','lin_clicks','pin_clicks','slack_clicks', 'slug','site','custom_check',
    ];
}
