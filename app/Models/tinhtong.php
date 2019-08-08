<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tinhtong extends Model
{
	protected $table = 'tinhtong';
	
     protected $fillable =  [
    	'hole',
    	'par',
    ];
}
