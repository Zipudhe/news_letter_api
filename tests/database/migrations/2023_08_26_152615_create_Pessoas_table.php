<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pessoas', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 100);
            $table->string('sobrenome', 100);
            $table->string('email')->unique('email');
            $table->json('stack');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pessoas');
    }
}
