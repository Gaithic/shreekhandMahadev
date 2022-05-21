<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficesNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices_names')->insert([
            'id' => '1',
            'officeName' => 'PMU'
        ]);

        DB::table('offices_names')->insert([
            'id' => '2',
            'officeName' => 'Circle'
        ]);

        DB::table('offices_names')->insert([
            'id' => '3',
            'officeName' => 'DMU'
        ]);

        DB::table('offices_names')->insert([
            'id' => '4',
            'officeName' => 'Range'
        ]);
    }
}
