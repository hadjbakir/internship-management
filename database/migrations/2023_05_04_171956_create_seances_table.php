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
		Schema::create('seance', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->Integer('demande_id')->unsigned()->index();
			$table->foreign('demande_id')->references('id')->on('demande')
						->onDelete('cascade')
						->onUpdate('cascade');
            $table->string('presence')->default('absent');
			$table->date('date');
			$table->time('hentre');
			$table->time('hsorti');
			$table->string('observation');
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('seance');
    }
};
