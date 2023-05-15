<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symptom::insert([
            [
                'code' => 'G001',
                'name' => 'Akibat Terkena Air',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G002',
                'name' => 'Arus Listrik yang Bocor',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G003',
                'name' => 'Aus (Susut karena tergesek)',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G004',
                'name' => 'Bahan Bakar Boros',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G005',
                'name' => 'Busi Tidak Menyemburkan Api saat Mesin Dinyalakan',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G006',
                'name' => 'Keluar Asap Pada Knalpot',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G007',
                'name' => 'Kotor Pada Komponen',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G008',
                'name' => 'Lampu Indikator Cek Engine Berkedip',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G009',
                'name' => 'Lampu Indikator Cek Engine Menyala Terus',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G010',
                'name' => 'Mesin Kendaraan Tiba tiba Mati',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G011',
                'name' => 'Mesin Kendaran Menjadi Brebet (Tersendat-sendat)',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G012',
                'name' => 'Motor Sulit Dinyalakan',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G013',
                'name' => 'Motor Tidak Bisa Dinyalakan',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G014',
                'name' => 'Oli Sudah Kering',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G015',
                'name' => 'Rusak, Patah Atau Pecah Pada Komponen',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G016',
                'name' => 'Speedometer Tidak Bergerak saat Motor Dinyalakan',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G017',
                'name' => 'Suara Mesin Tidak Halus',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G018',
                'name' => 'Suara Pompa Dari Tagki Melemah Pada Saat Memutar Kunci Ke Posisi ON',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G019',
                'name' => 'Tarikan Kekuatan Motor Berkurang',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'G020',
                'name' => 'Terdapat Bunyi Pada Daerah CVT',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
