<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Employees extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'employees';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [
        'middle_name','last_name','nationality','nationality','marital_status',
        'other_id','driving_license','driving_license_exp_date','job_title','pay_grade',
        'work_station_id','address2','city','country','province','postal_code',
        'home_phone','work_phone','work_email','private_email','joined_date','confirmation_date',
        'indirect_supervisors','department','termination_date','notes','ethnicity','immigration_status'

    ];
    protected $fillable = [
        'employee_id', 'first_name','middle_name','last_name','nationality',
        'birthday','gender','nationality','marital_status','other_id',
        'driving_license','driving_license_exp_date','employment_status','job_title','pay_grade',
        'work_station_id','address1','address2','city','country','province','postal_code',
        'home_phone','mobile_phone','work_phone','work_email','private_email',
        'joined_date','confirmation_date','supervisor','indirect_supervisors','department','termination_date',
        'notes','status','ethnicity','immigration_status'
    ];
    protected $hidden = [
        'id','created_at','updated_at'
    ];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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
