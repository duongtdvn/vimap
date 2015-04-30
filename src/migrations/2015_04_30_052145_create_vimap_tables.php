<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVimapTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vimap_provinces', function (Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->text('type');
		});

		Schema::create('vimap_districts', function (Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('province_id');
			$table->text('name');
			$table->text('type');
			$table->text('location');
		});

		Schema::create('vimap_wards', function (Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('district_id');
			$table->text('name');
			$table->text('type');
			$table->text('location');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('vimap_provinces');
		Schema::dropIfExists('vimap_districts');
		Schema::dropIfExists('vimap_wards');
	}

}
