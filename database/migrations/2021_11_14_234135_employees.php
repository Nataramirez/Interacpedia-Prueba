<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employees', function (Blueprint $table) {
            $table->engine="InnoDB"; // PERMITE BORRAR EN CASCADA
            $table->bigIncrements('id');
            $table->bigInteger('companies_id')->unsigned();
            $table->string('name');
            $table->string('lastName');
            $table->string('email');
            $table->integer('phone');
            $table->timestamps();
            $table->foreign('companies_id')->references('id')->on('companies')->onDelete("cascade"); //RELACION ENTRE TABLAS
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
