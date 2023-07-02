<?php

namespace App\Http\Controllers;

use App\Models\Damage;
use App\Models\Symptom;
use App\Models\Sparepart;
use App\Models\Article;
use App\Models\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $damage = Damage::count();
        $symptom = Symptom::count();
        $sparepart = Sparepart::count();
        $article = Article::count();

        $newarticle = Article::indexLimit();
        $newsparepart = Sparepart::indexLimit();

        $groups = DB::table('histories')
        ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
        ->select('motorcycles.name', DB::raw('count(*) as total'))
        ->groupBy('histories.motorcycle_id', 'motorcycles.name')
        ->pluck('total', 'name')
        ->all();

        for ($i=0; $i<=count($groups); $i++) {
        $colours[] = '#354F8E';
        }

        // Menampilkan Data Nama Kendaraan, Jumlah, Warna Ke Dalam Chart
        $chart = new Chart;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
        
        return view('admin.index', compact(
            'damage', 'symptom', 'sparepart', 
            'article', 'newarticle', 'newsparepart',
            'chart',
        ));
    }
}
