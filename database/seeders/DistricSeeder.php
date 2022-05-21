<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            'id' => 1,
            'districtName' => 'Bilaspur',
        
        ]);


        DB::table('districts')->insert([
            'id' => 2,
            'districtName' => 'Mandi',
    
        ]);


        DB::table('districts')->insert([
            'id' => 3,
            'districtName' => 'Kullu',
           
        ]);


        DB::table('districts')->insert([
            'id' => 4,
            'districtName' => 'Lahul and Spiti',
          
        ]);


        DB::table('districts')->insert([
            'id' => 5,
            'districtName' => 'Shimla',
        
        ]);


        DB::table('districts')->insert([
            'id' => 6,
            'districtName' => 'Kinnaur',
        
        ]);


        DB::table('districts')->insert([
            'id' => 7,
            'districtName' => 'Kangra',
        
        ]);
    }
}
