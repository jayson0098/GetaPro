<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    
	 /**
     * Protected Fillable
     *
     * @var string
     */

    protected $fillable = ['id', 'name'];

    /**
     * Relationship
     *
     * @var string
     */

    public function users()
    {
    	return $this->hasOne('App\User');
    }

}
