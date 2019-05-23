<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\facades\DB;
use App\Models\Employees;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EmployeesRequest as StoreRequest;
use App\Http\Requests\EmployeesRequest as UpdateRequest;

/**
 * Class EmployeesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class EmployeesController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Employees');
        $this->crud->setRoute("admin/employees");
        $this->crud->setEntityNameStrings('Employee', 'Employee');
        
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        //Customize Views for each CRUD Panel
        $this->crud->setShowView('employee.show');
        $this->crud->allowAccess('show');
        //$this->crud->setShowView('backpack::crud.different_show', $this->data);
        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();
        $this->crud->enableExportButtons();
        //Coloumn
        $this->crud->addColumn([
            'name' => 'first_name',
            'label' => 'First Name',
        ]);

        $this->crud->addColumn([
            'name' => 'middle_name',
            'label' => 'Middle Name',
        ]);

        $this->crud->addColumn([
            'name' => 'last_name',
            'label' => 'Last Name',
        ]);

        $this->crud->addColumn([
            'name' => 'marital_status',
            'label' => 'Marital',
        ]);
        $this->crud->addColumn([
                'name' => 'address1',
                'label'=> 'Alamat Sekarang'
                         
        ]);
        $this->crud->addColumn([
            'name' => 'address2',
            'label'=> 'Alamat Asli'
                     
        ]);

        $this->crud->addColumn([
            'name' => 'driving_license_exp_date',
            'label' => 'Driving License Expired',
            'type' => 'date',
        ]);
        //$this->crud->setColumns(['employee_id','first_name','gender','job_title','mobile_phone','joined_date']);
        //Field
        //gender
        $this->crud->addField([
            'name' => 'employee_id',
            'label' => 'ID'
            ]);
        $this->crud->addField([
        // Gender Enum
            'name' => 'gender',
            'label' => 'Gender',
            'type' => 'enum'
            ]);
        $this->crud->addField([
        // Marital Status
            'name' => 'marital_status',
            'label' => 'Marital Status',
            'type' => 'enum'
             
             ]);
        $this->crud->addField([
        // Employee Status
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum'
             
             ]);
        $this->crud->addField([
        // Alamat Sekarang
            'name' => 'address1',
            'label'=> 'Alamat Sekarang'
                     
            ]);
        $this->crud->addField([
        // Alamat Sekarang
            'name' => 'address2',
            'label'=> 'Alamat Asli'
                             
            ]);    
        $this->crud->addField([
        'name' => 'driving_license_exp_date',
        'label' => 'Driving License Expired',
        'type' => 'date',
        ]);

        
        // add asterisk for fields that are required in EmployeesRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function show($id)
    {
        $employee = DB::table('employees')->where('id', $id)->first();
        //$employees = \App\Models\Employees::find(1);
        //$data=DB::table('employees')->get();        

        // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
        // $this->crud->getListView() returns 'list' by default, or 'list_ajax' if ajax was enabled
        return view('employee.show', compact('employee'));
        //return View('employee.show')->with('employees',$data);
        //return view('employee.show', ['employee' => $employees]);

    }
}
