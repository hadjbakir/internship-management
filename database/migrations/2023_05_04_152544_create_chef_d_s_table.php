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
        Schema::create('chef_d_s', function (Blueprint $table) {
			$table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('stauts')->default(0);
            $table->Integer('dep_id')->unsigned()->index();
			$table->foreign('dep_id')->references('id')->on('dep')
			->onDelete('cascade')
            ->onUpdate('cascade');
			$table->string('family')->nullable();
			$table->string('numtlf')->nullable();
			$table->string('sexe')->nullable();
			$table->string('birthday')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('chef_d_s');
    }
};
