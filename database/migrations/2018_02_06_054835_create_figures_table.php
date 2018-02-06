<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix_title')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('suffix_title')->nullable();
            $table->string('occupation');
            $table->date('dob');
            $table->string('pob');
            $table->char('gender', 6);
            $table->text('bio');
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
        Schema::dropIfExists('figures');
    }
}
