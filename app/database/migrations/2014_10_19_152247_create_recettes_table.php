<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecettesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recettes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string(' nom_recette');
			$table->string('image');
			$table->string('duree_preparation');
			$table->string('duree_cuisson');
			$table->text('ingredients');
			$table->text('etapes');
			$table->integer('user_id');
			$table->integer ('category_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recettes');
	}

}
