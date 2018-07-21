<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //
    protected $table = 'volunteers';
	protected $fillable = ['name','emailId','contact','age','address'];
}
