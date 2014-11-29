<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Daftar extends Eloquent  
{
	protected $table = 'daftar';
	 protected $fillable = ['id', 'nama', 'nim', 'kelas', 'angkatan', 'hp', 'email', 'matkul', 'alasan'];
}
