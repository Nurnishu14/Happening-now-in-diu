<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('create_events')){

        Schema::create('create_events', function (Blueprint $table) {
            
			$table->increments('id');
			$table->string('event_name');
			$table->string('date');
			$table->string('time');
			$table->string('need_registration');
			$table->string('Venue');
			$table->string('event_details');
			$table->string('seat');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        Schema::dropIfExists('create_events');
    }
}
