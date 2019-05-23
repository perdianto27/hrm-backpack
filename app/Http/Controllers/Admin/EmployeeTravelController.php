<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EmployeeTravelRequest as StoreRequest;
use App\Http\Requests\EmployeeTravelRequest as UpdateRequest;

class EmployeeTravelController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\EmployeeTravel");
        $this->crud->setRoute("admin/employeetravel");
        $this->crud->setEntityNameStrings('Employee Travel', 'Employee Travel');

		$this->crud->allowAccess('show');
		$this->crud->setFromDb();
		//$this->crud->setColumns(['employee']);
        $this->crud->addField([
			'name' => 'employee',
			'label' => 'Employee Name',
			'type' => 'text'
			]);
		$this->crud->addField([
			'name' => 'travel_date',
			'label' => 'Travel Date',
			'type' => 'date'			 
			]);
		$this->crud->addField([
			'name' => 'return_date',
			'label' => 'Return Date',
			'type' => 'date'			 
			]);
		$this->crud->addField([
			'name' => 'status',
			'label' => 'Status',
			'type' => 'enum'			 
			]);
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