<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class districtseeder extends Seeder
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
            'name' => 'Bilaspur',
        
        ]);


        DB::table('districts')->insert([
            'id' => 2,
            'name' => 'Mandi',
    
        ]);


        DB::table('districts')->insert([
            'id' => 3,
            'name' => 'Kullu',
           
        ]);


        DB::table('districts')->insert([
            'id' => 4,
            'name' => 'Lahul and Spiti',
          
        ]);


        DB::table('districts')->insert([
            'id' => 5,
            'name' => 'Shimla',
        
        ]);
    }
}
