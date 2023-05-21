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
		Schema::create('fichenotation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->Integer('demande_id')->unsigned()->index();
            $table->foreign('demande_id')->references('id')->on('demande')
						->onDelete('cascade')
						->onUpdate('cascade');
			$table->integer('discipline');
			$table->string('aptitude');
			$table->integer('initiative');
			$table->integer('imagination');
			$table->integer('conaissance');
			$table->integer('note');
			$table->string('appreciation');
			$table->date('envoi');
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('fichenotation');
    }
};
