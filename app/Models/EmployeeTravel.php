<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class EmployeeTravel extends Model {

	use CrudTrait;

    /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'employeetravel';
	protected $primaryKey = 'id';
	// protected $guarded = ['employee'];
	protected $hidden = ['id','created_at','updated_at'];
	protected $fillable = [
        'employee','type','purpose','travel_from','travel_to','travel_date','return_date',
        'details','funding','currency','attachment1','attachment2','attachment3','status'
    ];
	public $timestamps = true;

	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/
	public function setDatetimeAttribute($travel_date) {
        $this->attributes['datetime'] = \Date::parse($travel_date);
    }
	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

	public function articles()
    {
        return $this->hasMany('App\Models\Article', 'article_tag');
    }

	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}