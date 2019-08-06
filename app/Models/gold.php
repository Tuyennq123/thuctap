<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gold extends Model
{
	protected $table = 'gold';
	
     protected $fillable =  [
    	'name',
    	'img',
        'time-start',
        'time-finish',
        'face',
        'youtube',
    ];
}
