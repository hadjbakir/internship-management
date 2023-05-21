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
		Schema::create('faculty', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            $table->unsignedInteger('university_id')->index();
			$table->foreign('university_id')->references('id')->on('university')
						->onDelete('cascade')
						->onUpdate('cascade');
            $table->string('nom');
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      //  Schema::dropIfExists('faculty');
    }
};
