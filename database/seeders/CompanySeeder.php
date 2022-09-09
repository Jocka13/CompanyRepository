<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Company::query()->create([
            'name' => 'Venikom',
            'address' => 'Janko Cvetinov 50'
        ]);
        Company::query()->create([
            'name' => 'Kirby',
            'address' => 'Boro Pockov 46'
        ]);
    }
}
