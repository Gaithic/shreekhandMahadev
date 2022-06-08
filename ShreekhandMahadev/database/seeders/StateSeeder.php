<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'id' => 1,
            'name' => 'Himachal',
        
        ]);


        DB::table('states')->insert([
            'id' => 2,
            'name' => 'Haryana',
    
        ]);


        DB::table('states')->insert([
            'id' => 3,
            'name' => 'Punjab',
           
        ]);


        DB::table('states')->insert([
            'id' => 4,
            'name' => 'Uttar Pradesh',
          
        ]);


        DB::table('states')->insert([
            'id' => 5,
            'name' => 'Uttrakhand',
        
        ]);
    }
}
