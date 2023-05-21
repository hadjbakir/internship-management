<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etidiants', function (Blueprint $table) {
            $table->increments('id');
			$table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->string('password');
			$table->Integer('dep_id')->unsigned()->index();
            $table->foreign('dep_id')->references('id')->on('dep')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('specialie')->nullable();
			$table->string('semestre')->nullable();
			$table->string('diplome', 20)->nullable();
			$table->string('family')->nullable();
			$table->string('numtlf')->nullable();
			$table->string('sexe')->nullable();
			$table->string('birthday')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('etidiants');
    }
};
