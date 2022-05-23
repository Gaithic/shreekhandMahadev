<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'id' => 1,
            'divisionName' => 'Bilaspur',
            'circle_id' => 1

        ]);

        DB::table('divisions')->insert([
            'id' => 2,
            'divisionName' => 'Mandi',
            'circle_id' => 2

        ]);


        DB::table('divisions')->insert([
            'id' => 3,
            'divisionName' => 'Nachan',
            'circle_id' => 2

        ]);


        DB::table('divisions')->insert([
            'id' => 4,
            'divisionName' => 'Suket',
            'circle_id' => 2

        ]);


        DB::table('divisions')->insert([
            'id' => 5,
            'divisionName' => 'Jogindernagar',
            'circle_id' => 2
        ]);


        DB::table('divisions')->insert([
            'id' => 6,
            'divisionName' => 'Kullu',
            'circle_id' => 3

        ]);


        DB::table('divisions')->insert([
            'id' => 7,
            'divisionName' => 'Parbati',
            'circle_id' => 3

        ]);

        DB::table('divisions')->insert([
            'id' => 8,
            'divisionName' => 'Banjar(Seraj)',
            'circle_id' => 3

        ]);

        DB::table('divisions')->insert([
            'id' => 9,
            'divisionName' => 'Lahaul',
            'circle_id' => 3

        ]);


        DB::table('divisions')->insert([
            'id' => 10,
            'divisionName' => 'Kullu',
            'circle_id' => 4

        ]);


        DB::table('divisions')->insert([
            'id' => 11,
            'divisionName' => 'Parbati',
            'circle_id' => 4

        ]);

        DB::table('divisions')->insert([
            'id' => 12,
            'divisionName' => 'Banjar(Seraj)',
            'circle_id' => 4

        ]);

        DB::table('divisions')->insert([
            'id' => 13,
            'divisionName' => 'Lahaul',
            'circle_id' => 4

        ]);


        DB::table('divisions')->insert([
            'id' => 14,
            'divisionName' => 'Ani',
            'circle_id' => 5

        ]);

        DB::table('divisions')->insert([
            'id' => 15,
            'divisionName' => 'Rampur',
            'circle_id' => 5

        ]);

        DB::table('divisions')->insert([
            'id' => 16,
            'divisionName' => 'kinnaur',
            'circle_id' => 5

        ]);

        DB::table('divisions')->insert([
            'id' => 17,
            'divisionName' => 'Ani',
            'circle_id' => 6

        ]);

        DB::table('divisions')->insert([
            'id' => 18,
            'divisionName' => 'Rampur',
            'circle_id' => 6

        ]);

        DB::table('divisions')->insert([
            'id' => 19,
            'divisionName' => 'kinnaur',
            'circle_id' => 6

        ]);

        DB::table('divisions')->insert([
            'id' => 20,
            'divisionName' => 'Ani',
            'circle_id' => 7

        ]);

        DB::table('divisions')->insert([
            'id' => 21,
            'divisionName' => 'Rampur',
            'circle_id' => 7

        ]);

        DB::table('divisions')->insert([
            'id' => 22,
            'divisionName' => 'kinnaur',
            'circle_id' => 7

        ]);


        DB::table('divisions')->insert([
            'id' => 23,
            'divisionName' => 'Shimla',
            'circle_id' => 8

        ]);

        DB::table('divisions')->insert([
            'id' => 24,
            'divisionName' => 'Theog',
            'circle_id' => 8

        ]);

        DB::table('divisions')->insert([
            'id' => 25,
            'divisionName' => 'Chopal',
            'circle_id' => 8

        ]);

        DB::table('divisions')->insert([
            'id' => 26,
            'divisionName' => 'Rohru',
            'circle_id' => 8

        ]);


        DB::table('divisions')->insert([
            'id' => 27,
            'divisionName' => 'Kullu Wildlife',
            'circle_id' => 9

        ]);


        DB::table('divisions')->insert([
            'id' => 29,
            'divisionName' => 'Spiti Wildlife',
            'circle_id' => 10

        ]);


        DB::table('divisions')->insert([
            'id' => 30,
            'divisionName' => 'Nurpur',
            'circle_id' => 11

        ]);


        DB::table('divisions')->insert([
            'id' => 31,
            'divisionName' => 'Dharmshala',
            'circle_id' => 11

        ]);


        DB::table('divisions')->insert([
            'id' => 32,
            'divisionName' => 'Palampur',
            'circle_id' => 11

        ]);


        DB::table('divisions')->insert([
            'id' => 33,
            'divisionName' => 'Dehra',
            'circle_id' => 12

        ]);



    }
}
