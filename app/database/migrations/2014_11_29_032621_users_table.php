<?php

use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('username', 20);
			$table->string('password', 20);
			$table->timestamps();
		});
		DB::table('users')->insert(
			array('username'=> 'admin', 'password'=> Hash::make('admin'))
			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
		DB::table('users')->where('username','kampret')->delete();	
	}
}