<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSvStudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_sv_stud', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->nullable();
            $table->foreignId('stud_id')->nullable();
            $table->text('staff_name');
            $table->text('stud_name');
            $table->text('status');
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
        Schema::dropIfExists('_sv_stud');
    }
}
