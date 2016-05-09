<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class P4Controller extends Controller
{
    public function getHomepage()
    {
        return 'Show the home page';
    }
	public function getEmployees()
	{
		return 'Show the list of employees';
	}
	public function getEmployee()
	{
		return 'Show individual employee'
	}
	public function getAddEmployee()
    {
        return 'Adding employee';
    }
	public function postAddEmployee()
	{
		return 'posting employee';
	}
}
