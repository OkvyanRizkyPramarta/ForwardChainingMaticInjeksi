<?php

namespace Database\Seeders;

use App\Models\Motorcycle;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motorcycle::insert([
            // Merk Honda 
            [
                'name' => 'Honda PCX-CBS',
                'cc' => '157',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda PCX-ABS',
                'cc' => '157',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda PCX e:HEV',
                'cc' => '157',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Honda Vario 125 CBS',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Vario 125 CBS-ISS',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Vario 150 Exclusive',
                'cc' => '150',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Vario 150 Sporty',
                'cc' => '150',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Vario 160',
                'cc' => '157',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Honda Scoopy Fashion',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Scoopy Sporty',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Scoopy Prestige',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Scoopy Stylish',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Honda BeAT CBS',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda BeAT CBS ISS',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda BeAT Street',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda BeAT Deluxe',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Honda SH 150 BK',
                'cc' => '153',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Forza',
                'cc' => '250',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Honda Genio CBS',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Genio CBS-ISS',
                'cc' => '110',
                'created_at' => Carbon::now(),
            ],

            [
                'name' => 'Honda ADV 160',
                'cc' => '157',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Spacy',
                'cc' => '108',
                'created_at' => Carbon::now(),
            ],


            // Merk Honda 
            [
                'name' => 'Yamaha Mio M3',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha All New Soul GT',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha Nmax',
                'cc' => '155',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha Xride',
                'cc' => '114',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha All New Aerox',
                'cc' => '155',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamah Lexi',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha New Fino FI',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha FreeGo',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha Grand Filano',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha Fazzio Hybrid',
                'cc' => '125',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Yamaha Xmax 250',
                'cc' => '250',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
