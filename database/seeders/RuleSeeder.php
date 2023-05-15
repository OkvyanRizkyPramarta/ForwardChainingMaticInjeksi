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
                //Kerusakan K001
                [
                    'G001' => '1',
                    'G002' => '0',
                    'G003' => '0',
                    'G004' => '1',
                    'G005' => '0',
                    'G006' => '0',
                    'G007' => '1',
                    'G008' => '0',
                    'G009' => '0',
                    'G010' => '0',
                    'G011' => '0',
                    'G012' => '1',
                    'G013' => '0',
                    'G014' => '0',
                    'G015' => '0',
                    'G016' => '0',
                    'G017' => '0',
                    'G018' => '0',
                    'G019' => '0',
                    'G020' => '0',
                    'created_at' => Carbon::now(),
                ],

                //Kerusakan K002
                [
                    'G001' => '0',
                    'G002' => '1',
                    'G003' => '0',
                    'G004' => '0',
                    'G005' => '1',
                    'G006' => '0',
                    'G007' => '0',
                    'G008' => '0',
                    'G009' => '1',
                    'G010' => '0',
                    'G011' => '0',
                    'G012' => '0',
                    'G013' => '0',
                    'G014' => '0',
                    'G015' => '0',
                    'G016' => '1',
                    'G017' => '0',
                    'G018' => '0',
                    'G019' => '0',
                    'G020' => '0',
                    'created_at' => Carbon::now(),
                ],

                //Kerusakan K003
                // [
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '0',
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
                //     'G019' => '0',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],
                // [
                //     'G001' => '0',
                //     'G002' => '0',
                //     'G003' => '0',
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
                //     'G019' => '0',
                //     'G020' => '0',
                //     'created_at' => Carbon::now(),
                // ],


            // [
            //     'id' => 'R01',
            //     'damage_id' => 'K001',
            //     'symptom_id' => 'G001',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R02',
            //     'damage_id' => 'K001',
            //     'symptom_id' => 'G004',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R03',
            //     'damage_id' => 'K001',
            //     'symptom_id' => 'G007',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R04',
            //     'damage_id' => 'K001',
            //     'symptom_id' => 'G012',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R05',
            //     'damage_id' => 'K002',
            //     'symptom_id' => 'G002',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R06',
            //     'damage_id' => 'K002',
            //     'symptom_id' => 'G005',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R07',
            //     'damage_id' => 'K002',
            //     'symptom_id' => 'G009',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R08',
            //     'damage_id' => 'K002',
            //     'symptom_id' => 'G016',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R09',
            //     'damage_id' => 'K003',
            //     'symptom_id' => 'G008',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R10',
            //     'damage_id' => 'K003',
            //     'symptom_id' => 'G012',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R11',
            //     'damage_id' => 'K003',
            //     'symptom_id' => 'G018',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R12',
            //     'damage_id' => 'K004',
            //     'symptom_id' => 'G004',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R13',
            //     'damage_id' => 'K004',
            //     'symptom_id' => 'G006',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R14',
            //     'damage_id' => 'K004',
            //     'symptom_id' => 'G007',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R15',
            //     'damage_id' => 'K004',
            //     'symptom_id' => 'G012',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R16',
            //     'damage_id' => 'K004',
            //     'symptom_id' => 'G017',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R17',
            //     'damage_id' => 'K004',
            //     'symptom_id' => 'G019',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R18',
            //     'damage_id' => 'K005',
            //     'symptom_id' => 'G006',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R19',
            //     'damage_id' => 'K005',
            //     'symptom_id' => 'G010',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R20',
            //     'damage_id' => 'K005',
            //     'symptom_id' => 'G011',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R21',
            //     'damage_id' => 'K005',
            //     'symptom_id' => 'G012',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R22',
            //     'damage_id' => 'K005',
            //     'symptom_id' => 'G013',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R23',
            //     'damage_id' => 'K005',
            //     'symptom_id' => 'G017',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R24',
            //     'damage_id' => 'K006',
            //     'symptom_id' => 'G003',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R25',
            //     'damage_id' => 'K006',
            //     'symptom_id' => 'G019',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R26',
            //     'damage_id' => 'K006',
            //     'symptom_id' => 'G020',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R27',
            //     'damage_id' => 'K007',
            //     'symptom_id' => 'G006',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R28',
            //     'damage_id' => 'K007',
            //     'symptom_id' => 'G012',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R29',
            //     'damage_id' => 'K007',
            //     'symptom_id' => 'G014',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R30',
            //     'damage_id' => 'K007',
            //     'symptom_id' => 'G017',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R31',
            //     'damage_id' => 'K007',
            //     'symptom_id' => 'G019',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R32',
            //     'damage_id' => 'K008',
            //     'symptom_id' => 'G003',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R33',
            //     'damage_id' => 'K008',
            //     'symptom_id' => 'G019',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R34',
            //     'damage_id' => 'K008',
            //     'symptom_id' => 'G020',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R35',
            //     'damage_id' => 'K009',
            //     'symptom_id' => 'G003',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R36',
            //     'damage_id' => 'K009',
            //     'symptom_id' => 'G015',
            //     'created_at' => Carbon::now(),
            // ],
            // [
            //     'id' => 'R37',
            //     'damage_id' => 'K009',
            //     'symptom_id' => 'G019',
            //     'created_at' => Carbon::now(),
            // ],
        ]);
    }
}
