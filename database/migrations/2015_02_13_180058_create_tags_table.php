<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
		});

		Schema::create('taggable', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('tag_id');
			$table->integer('taggable_id');
			$table->string('taggable_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tags');
		Schema::drop('taggable');
	}
}