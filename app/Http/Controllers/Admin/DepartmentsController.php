<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DepartmentsRequest as StoreRequest;
use App\Http\Requests\DepartmentsRequest as UpdateRequest;

class DepartmentsController extends CrudController {

	public function setup() {
        $this->crud->setModel('App\Models\Departments');
        $this->crud->setRoute("admin/departments");
		$this->crud->setEntityNameStrings('department', 'department');
		
		$this->crud->allowAccess('show');
        $this->crud->setColumns(['code','name','description']);
        $this->crud->setFromDb();
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}