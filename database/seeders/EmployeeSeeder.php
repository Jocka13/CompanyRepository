<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $company = Company::query()->find(1);
        $company->employees()->createMany([
            [
                'name' => 'Jocka',
                'uid' => '012345',
                'address' => 'Pero Random 51'
            ],
            [
                'name' => 'Angela',
                'uid' => '543210',
                'address' => 'Radovis'
            ]
        ]);
        $company = Company::query()->find(2);
        $company->employees()->createMany([
            [
                'name' => 'Pero Razbiras',
                'uid' => '956493',
                'address' => 'Labavo blazo'
            ],
            [
                'name' => 'Goce Delcev',
                'uid' => '512304',
                'address' => 'Najgolemo Selo'
            ]
        ]);
    }
}
