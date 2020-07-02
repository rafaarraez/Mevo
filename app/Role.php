<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{	
	/*
	* Relacion muchos a muchos con modelo User
	*/
    public function users()
	{
    	return $this->belongsToMany(User::class)->withTimestamps();
	}
}