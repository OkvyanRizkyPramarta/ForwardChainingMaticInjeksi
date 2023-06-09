<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rule::insert([

            [
                'damage_id' => '1',
                'symptom_id' => '4',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '1',
                'symptom_id' => '6',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '1',
                'symptom_id' => '12',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '1',
                'symptom_id' => '19',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '2',
                'symptom_id' => '1',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '2',
                'symptom_id' => '5',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '2',
                'symptom_id' => '9',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '2',
                'symptom_id' => '12',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '2',
                'symptom_id' => '16',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '3',
                'symptom_id' => '4',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '3',
                'symptom_id' => '8',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '3',
                'symptom_id' => '12',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '3',
                'symptom_id' => '18',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '4',
                'symptom_id' => '4',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '4',
                'symptom_id' => '7',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '4',
                'symptom_id' => '12',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '4',
                'symptom_id' => '17',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '4',
                'symptom_id' => '19',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '5',
                'symptom_id' => '4',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '5',
                'symptom_id' => '10',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '5',
                'symptom_id' => '11',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '5',
                'symptom_id' => '12',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '5',
                'symptom_id' => '13',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '6',
                'symptom_id' => '15',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '6',
                'symptom_id' => '19',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '6',
                'symptom_id' => '20',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '7',
                'symptom_id' => '6',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '7',
                'symptom_id' => '12',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '7',
                'symptom_id' => '14',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '7',
                'symptom_id' => '17',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '7',
                'symptom_id' => '19',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '8',
                'symptom_id' => '2',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '8',
                'symptom_id' => '3',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '8',
                'symptom_id' => '19',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '8',
                'symptom_id' => '20',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '9',
                'symptom_id' => '3',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '9',
                'symptom_id' => '15',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '9',
                'symptom_id' => '19',
                'created_at' => Carbon::now(),
            ],
            [
                'damage_id' => '9',
                'symptom_id' => '20',
                'created_at' => Carbon::now(),
            ],
            
                // // Kerusakan K001
                // [
                //     'damage_id' => '1',
                //     'G001' => '1',
                //     'G002' => '0',
                //     'G003' => '0',
                //     'G004' => '1',
                //     'G005' => '0',
                //     'G006' => '0',
                //     'G007' => '1',
                //     'G008' => '0',
                //     'G009' => '0',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '1',
                //     'G013' => '0',
                //     'G014' => '0',
                //     'G015' => '0',
                //     'G016' => '0',
                //     'G017' => '0',
                //     'G018' => '0',
                //     'G019' => '0',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K002
                // [
                //     'damage_id' => '2',
                //     'G001' => '0',
                //     'G002' => '1',
                //     'G003' => '0',
                //     'G004' => '0',
                //     'G005' => '1',
                //     'G006' => '0',
                //     'G007' => '0',
                //     'G008' => '0',
                //     'G009' => '1',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '0',
                //     'G013' => '0',
                //     'G014' => '0',
                //     'G015' => '0',
                //     'G016' => '1',
                //     'G017' => '0',
                //     'G018' => '0',
                //     'G019' => '0',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K003
                // [
                //     'damage_id' => '3',
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '0',
                //     'G004' => '0',
                //     'G005' => '0',
                //     'G006' => '0',
                //     'G007' => '0',
                //     'G008' => '1',
                //     'G009' => '0',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '1',
                //     'G013' => '0',
                //     'G014' => '0',
                //     'G015' => '0',
                //     'G016' => '0',
                //     'G017' => '0',
                //     'G018' => '1',
                //     'G019' => '0',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K004
                // [
                //     'damage_id' => '4',
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '0',
                //     'G004' => '1',
                //     'G005' => '0',
                //     'G006' => '1',
                //     'G007' => '1',
                //     'G008' => '0',
                //     'G009' => '0',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '1',
                //     'G013' => '0',
                //     'G014' => '0',
                //     'G015' => '0',
                //     'G016' => '0',
                //     'G017' => '1',
                //     'G018' => '0',
                //     'G019' => '1',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K005
                // [
                //     'damage_id' => '5',
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '0',
                //     'G004' => '0',
                //     'G005' => '0',
                //     'G006' => '1',
                //     'G007' => '0',
                //     'G008' => '0',
                //     'G009' => '0',
                //     'G010' => '1',
                //     'G011' => '1',
                //     'G012' => '1',
                //     'G013' => '1',
                //     'G014' => '0',
                //     'G015' => '0',
                //     'G016' => '0',
                //     'G017' => '1',
                //     'G018' => '0',
                //     'G019' => '0',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K006
                // [
                //     'damage_id' => '6',
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '1',
                //     'G004' => '0',
                //     'G005' => '0',
                //     'G006' => '0',
                //     'G007' => '0',
                //     'G008' => '0',
                //     'G009' => '0',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '0',
                //     'G013' => '0',
                //     'G014' => '0',
                //     'G015' => '0',
                //     'G016' => '0',
                //     'G017' => '0',
                //     'G018' => '0',
                //     'G019' => '1',
                //     'G020' => '1',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K007
                // [
                //     'damage_id' => '7',
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '0',
                //     'G004' => '0',
                //     'G005' => '0',
                //     'G006' => '1',
                //     'G007' => '0',
                //     'G008' => '0',
                //     'G009' => '0',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '1',
                //     'G013' => '0',
                //     'G014' => '1',
                //     'G015' => '0',
                //     'G016' => '0',
                //     'G017' => '1',
                //     'G018' => '0',
                //     'G019' => '1',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K008
                // [
                //     'damage_id' => '8',
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '1',
                //     'G004' => '0',
                //     'G005' => '0',
                //     'G006' => '0',
                //     'G007' => '0',
                //     'G008' => '0',
                //     'G009' => '0',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '0',
                //     'G013' => '0',
                //     'G014' => '0',
                //     'G015' => '0',
                //     'G016' => '0',
                //     'G017' => '0',
                //     'G018' => '0',
                //     'G019' => '1',
                //     'G020' => '1',
                //     'created_at' => Carbon::now(),
                // ],

                // //Kerusakan K009
                // [
                //     'damage_id' => '9',
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '1',
                //     'G004' => '0',
                //     'G005' => '0',
                //     'G006' => '0',
                //     'G007' => '0',
                //     'G008' => '0',
                //     'G009' => '0',
                //     'G010' => '0',
                //     'G011' => '0',
                //     'G012' => '0',
                //     'G013' => '0',
                //     'G014' => '0',
                //     'G015' => '1',
                //     'G016' => '0',
                //     'G017' => '0',
                //     'G018' => '0',
                //     'G019' => '1',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],
        ]);
    }
}
