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
		Schema::create('demande', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('stageacp', 100)->default('notyet');
			$table->string('depacp', 100)->default('notyet');
			$table->Integer('etidiants_id')->unsigned()->index();
            $table->foreign('etidiants_id')->references('id')->on('etidiants')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->Integer('maitrestage_id')->unsigned()->index();
            $table->foreign('maitrestage_id')->references('id')->on('maitrestages')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->date('dateinsc');
            $table->date('datefin');
			$table->string('diplome', 100);
			$table->string('period');
			$table->longText('motif')->nullable();
			$table->string('theme', 100);
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('demande');
    }
};
