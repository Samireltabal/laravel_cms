<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';

    public $primarykey = 'id';
	// timestamps
	public $timestamps = true;
    
    public function Posts(){
        Return $this->belongsTo('App/Post');
    }
}
