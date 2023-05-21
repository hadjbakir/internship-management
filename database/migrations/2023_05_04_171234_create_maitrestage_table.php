<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
	{
		Schema::create('maitrestages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->string('password');
			$table->Integer('entrp_id')->unsigned()->index();
            $table->foreign('entrp_id')->references('id')->on('entrp')
            ->onDelete('cascade')
            ->onUpdate('cascade');
			$table->string('family')->nullable();
			$table->string('numtlf')->nullable();
            $table->timestamp('email_verified_at')->nullable();
			$table->string('sexe')->nullable();
			$table->string('birthday')->nullable();
            $table->tinyInteger('stauts')->default(0);


		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('maitrestages');
    }
};
