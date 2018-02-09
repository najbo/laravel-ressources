<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{

	    public function company()
    {
    	return $this->belongsTo(Company::class);
    }


public function isComplete()
{
	return true;
}


}