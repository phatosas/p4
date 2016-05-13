<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
		$employees = \App\Employee::all();
		return view('employee.index')->with('employees',$employees);
    }
	
	 /**
     * Display the specified employees.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        $employee =\App\Employee::find($id);
		
		return view('employee.show')->with('employee',$employee);
    }

    /**
     * Show the form for creating a new employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created employee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
		$this->validate($request, [
            'first_name' => 'required|min:2|max:30',
			'last_name' => 'required|min:2|max:30',
        ]);
		
		$employee = new \App\Employee();
		$employee->first_name = $request->first_name;
		$employee->last_name = $request->last_name;
		$employee->position = $request->position;
		$employee->month = $request->month;
		$employee->day = $request->day;
		$employee->year = $request->year;
		$employee->save();
		
		\Session::flash('flash_message','The new employee has been added');
		return redirect('/employees');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $employee =\App\Employee::find($id);
		
		return view('employee.edit')->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function postEdit(Request $request)
    {
        $employee = \App\Employee::find($request->id);
		$employee->first_name = $request->first_name;
		$employee->last_name = $request->last_name;
		$employee->position = $request->position;
		$employee->month = $request->month;
		$employee->day = $request->day;
		$employee->year = $request->year;
		$employee->save();
		\Session::flash('flash_message','The employee has been edited');
		return redirect('/employees/show/'.$request->id);
    }
	public function getDelete($id)
    {
        $employee =\App\Employee::find($id);
		return view('employee.delete')->with('employee',$employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function postDelete(Request $request)
    {
		$employee = \App\Employee::find($request->id);
		$employee->delete();
		\Session::flash('flash_message','The employee has been deleted');
		return redirect('/employees');
    }
}
