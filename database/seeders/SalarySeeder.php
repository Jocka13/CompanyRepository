<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $employee = Employee::query()->find(1);
        $employee->salary()->createMany([
            [
                'salary' => 2000,
                'date' => '23-05-2022'
            ],
            [
                'salary' => 3500,
                'date' => '05.09.2019'
            ]
        ]);

        $employee = Employee::query()->find(2);
        $employee->salary()->createMany([
            [
                'salary' => 1400,
                'date' => '21-02-2018'
            ],
            [
                'salary' => 5000,
                'date' => '12.11.2014'
            ]
        ]);
    }
}
