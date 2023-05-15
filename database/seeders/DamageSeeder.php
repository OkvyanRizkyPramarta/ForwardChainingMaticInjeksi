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
                // 'description' => 'Busi merupakan komponen penting dalam sistem pengapian di motor. 
                // Tanpa busi, motor tidak dapat di hidupkan mesinnya. Busi motor memiliki fungsi 
                // untuk meneruskan tegangan listrik yang disalurkan oleh ignition coil menjadi 
                // percikan api yang akan membakar campuran udara dan bensin di ruang bakar. Ketika 
                // busi motor mengalami masalah, maka dapat mengakibatkan sistem pengapian tidak 
                // bekerja secara sempurna. Untuk itu perlunya selalu merawat kondisi busi agar 
                // berfungsi secara optimal.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K002',
                'name' => 'ECU',
                // 'description' => 'Engine Control Unit (ECU) merupakan seperangkat alat yang bekerja 
                // sebagai sistem pengatur dan pengontrol pada motor bermesin. Perangkat ini dapat 
                // menjadi pusat dari segala kegiatan yang terjadi pada sebuah motor karena komponen 
                // satu ini terhubung dengan banyak perangkat. Part ini dapat ditemukan pada motor injeksi.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K003',
                'name' => 'Filter Fuel Pump',
                // 'description' => 'Filter fuel pump berfungsi menyaring kotoran dari bahan bakar sebelum 
                // disalurkan oleh fuel pump menuju injektor.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K004',
                'name' => 'Filter Udara',
                // 'description' => 'Filter udara memiliki fungsi untuk menyaring udara yang masuk ke dalam 
                // ruang bakar. Udara yang digunakan dalam proses pembakaran harus benar-benar bersih 
                // sehingga tidak menyumbat sistem injeksi atau karburator. Filter udara juga berfungsi 
                // untuk menjaga ruang bakar tetap bersih, Menghindari kemunculan karat akibat udara atau air, 
                // Menjaga kondisi motor tetap bertenaga.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K005',
                'name' => 'Injektor',
                // 'description' => 'Injektor berfungsi untuk mengabutkan bahan bakar dan menyemprotkan 
                // bahan bakar tersebut ke saluran masuk (intake manifold), pada umumnya sebelum katup 
                // masuk. Jumlah bahan bakar yang diinjeksikan tergantung dari tekanan bahan bakar, 
                // besarnya lubang pada injektor, dan lamanya injektor tersebut membuka.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K006',
                'name' => 'Kampas Kopling',
                // 'description' => 'Motor matik menggunakan kampas kopling ganda yang berfungsi untuk 
                // menyalurkan tenaga dari mesin menuju roda belakang.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K007',
                'name' => 'Piston',
                // 'description' => 'Piston memiliki peran yang sangat penting dalam proses pembakaran 
                // mesin kendaraan. Fungsi piston di antaranya mengatur volume silinder, menghisap 
                // udara ke dalam silinder, mengompres campuran udara dan bahan bakar, mengubah daya 
                // ekspansi pembakaran menjadi energi mekanik, serta mendorong gas sisa pembakaran keluar.',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K008',
                'name' => 'Roller',
                // 'description' => 'Fungsi roller pada motor matic adalah menciptakan tekanan pada pulley 
                // agar dapat bergerak. Roller juga berfungsi mengatur akselerasi pada sepeda motor. Roller 
                // bawaan dari pabrik akan bekerja mengatur akselerasi motor agar tetap seimbang. ',
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'K009',
                'name' => 'V - Belt',
                // 'description' => 'V-belt merupakan salah satu komponen penting pada motor dengan sistem 
                // transmisi otomatis. V-belt punya peran seperti rantai motor yang menghubungkan gir di 
                // crankcase dengan gir di roda belakang. Pada motor matik, v-belt menjadi penghubung puli 
                // depan dan puli belakang.',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
