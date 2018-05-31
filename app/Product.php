<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $primarykey = 'id';
	// timestamps
	public $timestamps = true;
}
