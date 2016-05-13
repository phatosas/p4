<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		{
			DB::table('employees')->insert([
				'created_at' => Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
				'first_name' => 'Osagie',
				'last_name' => 'Imafidon',
				'position' => 'Counsellor',
				'month' => 'August',
				'day' => 23,
				'year' => 1980,
			]);

			DB::table('employees')->insert([
				'created_at' => Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
				'first_name' => 'Ise',
				'last_name' => 'Osahimhen',
				'position' => 'Counsellor',
				'month' => 'November',
				'day' => 2,
				'year' => 1969,
			]);
		}
    }
}
