<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
	/**
     * Protected Fillable
     *
     * @var string
     */

    protected $fillable = ['id', 'name','description'];
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
