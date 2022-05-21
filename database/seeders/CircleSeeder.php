<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CircleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('circles')->insert([
            'id' => 1,
            'circleName' => 'Bilaspur',
            
        
        ]);

        
        DB::table('circles')->insert([
            'id' => 2,
            'circleName' => 'Mandi',
            
        
        ]);

        
        DB::table('circles')->insert([
            'id' => 3,
            'circleName' => 'Kullu',
            
        
        ]);

        DB::table('circles')->insert([
            'id' => 4,
            'circleName' => 'Kullu',
            
        
        ]);


        
        DB::table('circles')->insert([
            'id' => 5,
            'circleName' => 'Rampur',
            
        ]);

        DB::table('circles')->insert([
            'id' => 6,
            'circleName' => 'Rampur',
            
        ]);

        
        DB::table('circles')->insert([
            'id' => 7,
            'circleName' => 'Rampur',
            
        ]);

        DB::table('circles')->insert([
            'id' => 8,
            'circleName' => 'Shimla',
            
           
        ]);

        
        DB::table('circles')->insert([
            'id' => 9,
            'circleName' => 'GHNP',
            
           
        ]);


        
        DB::table('circles')->insert([
            'id' => 10,
            'circleName' => 'Shimla(WL)',
            
           
        ]);

        
        DB::table('circles')->insert([
            'id' => 11,
            'circleName' => 'Dharmshala',
            
            
        ]);

        
        DB::table('circles')->insert([
            'id' => 12,
            'circleName' => 'Hamirpur',
            
        ]);
    }
}
