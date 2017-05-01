<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function scopeIncomplete( $query )	//Prefix scope allows us to bring in query
    {

    	return $query->where( 'completed', 0 );
    	
    }

}
