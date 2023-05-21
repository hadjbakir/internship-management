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
		Schema::create('dep', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->Integer('faculty_id')->unsigned()->index();
            $table->foreign('faculty_id')->references('id')->on('faculty')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      //  Schema::dropIfExists('dep');
    }
};
