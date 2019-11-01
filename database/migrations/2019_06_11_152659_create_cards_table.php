<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->integer('u_id');
            $table->string('title');
            $table->string('description');
            $table->string('destination');
            $table->string('card_size');
            $table->string('fb_image');
            $table->string('twitter_image');
            $table->string('linkedin_image');
            $table->string('slack_image');
            $table->string('pinterest_image');
            $table->integer('fb_clicks')->default(0);
            $table->integer('tw_clicks')->default(0);
            $table->integer('lin_clicks')->default(0);
            $table->integer('pin_clicks')->default(0);
            $table->integer('slack_clicks')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
