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
		Schema::create('offres', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            $table->Integer('maitrestages_id')->unsigned()->index();
            $table->foreign('maitrestages_id')->references('id')
            ->on('maitrestages')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->date('datedebut');
            $table->date('datefinish');
            $table->string('period');
            $table->Integer('nmbrpostes')->default(1);
            $table->string('poste');
            $table->string('theme', 100);
            $table->string('diplome', 100);
    });
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('offre');
    }
};
