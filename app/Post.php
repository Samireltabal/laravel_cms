<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Tabel name
	protected $table = 'posts';
	// primary key
	public $primarykey = 'id';
	// timestamps
	public $timestamps = true;
	
	public function user() {
		return $this->belongsTo('App\User');
	}
	}
