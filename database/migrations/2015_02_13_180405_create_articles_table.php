<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_articles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('author_id');
			$table->integer('category_id');
			$table->string('title');
			$table->string('slug');
			$table->text('content');
			$table->string('featured_image');
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
		Schema::drop('blog_articles');
	}
}