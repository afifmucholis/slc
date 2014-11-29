<?php

use Illuminate\Database\Migrations\Migration;

class DaftarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('daftar', function($table){
			$table->increments('id');
			$table->string('nama', 20);
			$table->string('nim', 15);
			$table->string('kelas', 15);
			$table->string('angkatan', 15);
			$table->string('hp', 15);
			$table->string('email', 35);
			$table->text('matkul');
			$table->text('alasan');
			$table->timestamps();
		});
		DB::table('daftar')->insert(
			array('nama'=> 'wawa', 'nim'=> '09876', 'kelas'=> 'A', 'angkatan'=> '13', 'hp'=>'09876543', 'email'=> 'adfsg', 'matkul'=> 'dfs', 'alasan'=>'fsfs')
			);
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('daftar');
	}

}