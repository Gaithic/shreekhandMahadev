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
            'district_id'  => 1


        ]);


        DB::table('circles')->insert([
            'id' => 2,
            'circleName' => 'Mandi',
            'district_id'  => 2


        ]);


        DB::table('circles')->insert([
            'id' => 3,
            'circleName' => 'Kullu',
            'district_id'  => 3


        ]);

        DB::table('circles')->insert([
            'id' => 4,
            'circleName' => 'Kullu',
            'district_id'  => 4


        ]);



        DB::table('circles')->insert([
            'id' => 5,
            'circleName' => 'Rampur',
            'district_id'  => 3

        ]);

        DB::table('circles')->insert([
            'id' => 6,
            'circleName' => 'Rampur',
            'district_id'  => 5

        ]);


        DB::table('circles')->insert([
            'id' => 7,
            'circleName' => 'Rampur',
            'district_id'  => 6

        ]);

        DB::table('circles')->insert([
            'id' => 8,
            'circleName' => 'Shimla',
            'district_id'  => 5


        ]);


        DB::table('circles')->insert([
            'id' => 9,
            'circleName' => 'GHNP',
            'district_id'  => 3


        ]);



        DB::table('circles')->insert([
            'id' => 10,
            'circleName' => 'Shimla(WL)',
            'district_id'  => 4


        ]);


        DB::table('circles')->insert([
            'id' => 11,
            'circleName' => 'Dharmshala',
            'district_id'  => 7


        ]);


        DB::table('circles')->insert([
            'id' => 12,
            'circleName' => 'Hamirpur',
            'district_id'  => 7

        ]);
    }
}
