<?php

namespace Database\Seeders;

use App\Models\Damage;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DamageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Damage::insert([
            [
                'code' => 'K001 ',
                'name' => 'Busi',
                'solution' => 
                'Menggunakan bahan bakar yang berkualitas baik karena berpengaruh terhadap busi.
                Menggunakan busi yang bersih dan tidak kotor.
                Menggunakan model busi yang sesuai dengan kendaraan matic injeksi atau original.
                Melakukan pengecekan pada sistem pengapian busi.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K002',
                'name' => 'ECU',
                'solution' => 
                'Pastikan semua koneksi dan kabel yang terhubung ke ECU terpasang dengan baik dan tidak ada yang longgar atau rusak.
                Mengganti komponen pada ECU yang sudah rusak dengan yang baru dan spesifikasi yang sama.
                Melakukan pengecekan pada ECU terhadap sensor-sensor seperti sensor suhu mesin, dll.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K003',
                'name' => 'Filter Fuel Pump',
                'solution' => 
                'Periksa kabel-kabel dan konektor yang terhubung ke fuel pump dan sistem terkait dengan bahan bakar.
                Mengganti kabel-kabel dan konektor yang terhubung ke fuel pump dan sistem terkait.
                Membersihkan atau mengganti fuel pump secara keseluruhan.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K004',
                'name' => 'Filter Udara',
                'solution' => 
                'Membersihkan filter udara yang terlihat kotor dengan lembut agar tidak merusak struktur atau elemen filter.
                Mengganti komponen atau filter udara dengan yang baru jika sudah sangat kotor atau rusak.
                Memeriksa selang ventilasi udara dan pastikan tidak ada kerusakan atau penyumbatan yang dapat mengganggu aliran udara yang masuk.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K005',
                'name' => 'Injektor',
                'solution' => 
                'Membersihkan injektor dengan cara menggunakan cairan atau produk khusus untuk membersihkan injektor
                Jika terdapat kebocoran dapat mengganti seal injector dengan yang baru untuk memastikan kekencangan dan kebocoran yang minimal.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K006',
                'name' => 'Kampas Kopling',
                'solution' => 
                'Mengganti kampas kopling jika kampas kopling sudah dalam kondisi yang sangat buruk atau tidak dapat diperbaiki.
                Membersihkan kampas kopling terlihat kotor atau terdapat kotoran yang menempel.
                Rutin membersihkan / service bagian cvt.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K007',
                'name' => 'Piston',
                'solution' => 
                'Rutin Mengganti oli.
                Melakukan pengecekkan suhu mesin untuk memastikan aliran udara dan pendinginan yang optimal.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K008',
                'name' => 'Roller',
                'solution' => 
                'Memeriksa kondisi roller untuk memastikan apakah roller sudah terkikis atau aus karena usia atau faktor lainnya.
                Mengganti atau menggunakan roller yang sesuai dengan kendaraan matic injeksi atau original.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K009',
                'name' => 'V - Belt',
                'solution' => 
                'Mengganti atau menggunakan model v - belt yang sesuai dengan kendaraan matic injeksi atau original.',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
