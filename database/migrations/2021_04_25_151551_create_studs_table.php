<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if not migrated  run >>php artisan migrate:refresh
        //                  then >> php artisan migrate:status
        Schema::create('studs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stud_id');
            $table->string('stud_email');
            $table->text('stud_name');
            $table->string('prog_code');
            $table->string('pw');
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
        Schema::dropIfExists('studs');
    }
}
