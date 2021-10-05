<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class EmployeeController extends BaseController
{
    public function index()
    {
    	$employee = new EmployeeModel();

    	$data = [
    		'employees' => $employee->paginate(5),
    		'pager' => $employee->pager,
    	];
    	/*
    	$data['employees'] = $employee->findAll();
		*/
        echo view('partials/header');
        echo view('Employee/index', $data);
        echo view('partials/footer');
    }

    public function create()
    {
        echo view('partials/header');
        echo view('Employee/create');
        echo view('partials/footer');
    }

    public function store()
    {
    	$employee = new EmployeeModel();
    	$data = [
    		'name' => $this->request->getPost('name'),
    		'city' => $this->request->getPost('city'),
    	];

    	$employee->save($data);
    	return redirect()->to(base_url('Employee'))->with('status', "Employee Added Successfully");
    }

    public function edit($id)
    {
    	$employee = new EmployeeModel();

    	$data['employees'] = $employee->find($id);

        echo view('partials/header');
        echo view('Employee/edit', $data);
        echo view('partials/footer');
    }

    public function update($id)
    {
    	$employee = new EmployeeModel();
    	$employee->find($id);

    	$data = [
    		'name' => $this->request->getPost('name'),
    		'city' => $this->request->getPost('city'),
    	];

    	$employee->update($id, $data);
    	return redirect()->to(base_url('Employee'))->with('status', "Employee Updated Successfully");
    }

    public function destroy($id)
    {
    	$employee = new EmployeeModel();
    	$employee->delete($id);
    	return redirect()->to(base_url('Employee'))->with('status', "Employee Deleted Successfully");
    }
}
