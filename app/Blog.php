<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['_token'];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
