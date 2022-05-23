<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranges')->insert([
            'id' => 1,
            'rangesName' => 'Sadar',
            'division_id' => 1

        ]);


        DB::table('ranges')->insert([
            'id' => 2,
            'rangesName' => 'Ghumarwin',
            'division_id' => 1

        ]);


        DB::table('ranges')->insert([
            'id' => 3,
            'rangesName' => 'Swarghat',
            'division_id' => 1

        ]);


        DB::table('ranges')->insert([
            'id' => 4,
            'rangesName' => 'Jhanduta',
            'division_id' => 1

        ]);


        DB::table('ranges')->insert([
            'id' => 5,
            'rangesName' => 'Drang',
            'division_id' => 2

        ]);


        DB::table('ranges')->insert([
            'id' => 6,
            'rangesName' => 'Kotli',
            'division_id' => 2

        ]);


        DB::table('ranges')->insert([
            'id' => 7,
            'rangesName' => 'Mandi',
            'division_id' => 2

        ]);


        DB::table('ranges')->insert([
            'id' => 8,
            'rangesName' => 'Kataula',
            'division_id' => 2

        ]);


        DB::table('ranges')->insert([
            'id' => 9,
            'rangesName' => 'Nachan',
            'division_id' => 3

        ]);


        DB::table('ranges')->insert([
            'id' => 10,
            'rangesName' => 'Baldwara',
            'division_id' => 4

        ]);


        DB::table('ranges')->insert([
            'id' => 11,
            'rangesName' => 'Kangoo',
            'division_id' => 4

        ]);


        DB::table('ranges')->insert([
            'id' => 12,
            'rangesName' => 'Jaidevi',
            'division_id' => 4

        ]);


        DB::table('ranges')->insert([
            'id' => 13,
            'rangesName' => 'Jhungi',
            'division_id' => 4

        ]);


        DB::table('ranges')->insert([
            'id' => 14,
            'rangesName' => 'Sarkaghat',
            'division_id' => 4

        ]);


        DB::table('ranges')->insert([
            'id' => 15,
           'rangesName' => 'Suket',
            'division_id' => 4

        ]);


        DB::table('ranges')->insert([
            'id' => 16,
            'rangesName' => 'Dharmpur',
            'division_id' => 5

        ]);


        DB::table('ranges')->insert([
            'id' => 18,
            'rangesName' => 'Ladbharol',
            'division_id' => 5

        ]);


        DB::table('ranges')->insert([
            'id' => 19,
            'rangesName' => 'Jogindernagar',
            'division_id' => 5

        ]);


        DB::table('ranges')->insert([
            'id' => 20,
            'rangesName' => 'Urla',
            'division_id' => 5

        ]);


        DB::table('ranges')->insert([
            'id' => 21,
            'rangesName' => 'Kamlah',
            'division_id' => 5

        ]);

        DB::table('ranges')->insert([
            'id' => 22,
            'rangesName' => 'Kullu',
            'division_id' => 6

        ]);


        DB::table('ranges')->insert([
            'id' => 23,
            'rangesName' => 'Patalikuhal',
            'division_id' => 6

        ]);


        DB::table('ranges')->insert([
            'id' => 24,
            'rangesName' => 'Manali',
            'division_id' => 6

        ]);


        DB::table('ranges')->insert([
            'id' => 25,
            'rangesName' => 'Naggar',
            'division_id' => 6

        ]);


        DB::table('ranges')->insert([
            'id' => 26,
            'rangesName' => 'Bhutti',
            'division_id' => 6

        ]);


        DB::table('ranges')->insert([
            'id' => 27,
            'rangesName' => 'Bhuntar',
            'division_id' => 7

        ]);


        DB::table('ranges')->insert([
            'id' => 28,
            'rangesName' => 'jari',
            'division_id' => 7

        ]);


        DB::table('ranges')->insert([
            'id' => 29,
            'rangesName' => 'Hurla',
            'division_id' => 7

        ]);


        DB::table('ranges')->insert([
            'id' => 30,
            'rangesName' => 'Sainj',
            'division_id' => 8

        ]);


        DB::table('ranges')->insert([
            'id' => 31,
            'rangesName' => 'Tirthan',
            'division_id' => 8

        ]);


        DB::table('ranges')->insert([
            'id' => 32,
            'rangesName' => 'Pattan',
            'division_id' => 9

        ]);


        DB::table('ranges')->insert([
            'id' => 33,
            'rangesName' => 'Keylong',
            'division_id' => 9

        ]);


        DB::table('ranges')->insert([
            'id' => 34,
            'rangesName' => 'Arsoo',
            'division_id' => 10

        ]);


        DB::table('ranges')->insert([
            'id' => 35,
            'rangesName' => 'Nither',
            'division_id' => 10

        ]);


        DB::table('ranges')->insert([
            'id' => 36,
            'rangesName' => 'Sarahan',
            'division_id' => 11

        ]);




    }
}
