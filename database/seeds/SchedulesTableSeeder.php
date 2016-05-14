<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		
		$employee_id = \App\Employee::where('last_name','=','Imafidon')->pluck('id')->first();
		DB::table('schedules')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'employee_id' => $employee_id,
			'day' => 'monday',
			'shift' => 'morning',
			'position' => 'counsellor',
		]);
		$employee_id = \App\Employee::where('first_name','=','Ise')->pluck('id')->first();
		DB::table('schedules')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
		'employee_id' => $employee_id,
        'day' => 'tuesday',
        'shift' => 'night',
        'position' => 'counsellor',
		]);
	}
}