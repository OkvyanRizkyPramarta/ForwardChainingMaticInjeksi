<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use App\Models\Damage;
use App\Models\Sparepart;
use App\Models\Article;
use App\Models\Motorcycle;
use App\Models\Diagnoses;
use App\Models\History;
use App\Models\HistoryDamage;
use App\Models\Rule;
use App\Models\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class GuestController extends Controller
{
    public function home()
    {
        $newarticle = Article::indexLimit();
        $newsparepart = Sparepart::indexLimit();

        return view('guest.index', compact('newarticle', 'newsparepart'));
    }

    public function diagnoses()
    {
        $motorcycle = Motorcycle::index();
        $symptom = Symptom::index();
        return view('guest.diagnoses', compact('motorcycle', 'symptom'));
    }

    public function processDiagnoses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'km' => 'required|max:5',
            'symptom_id' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        //Mencari Id Yang diinputkan
        $rules = Rule::with('damage', 'symptom')->whereIn('symptom_id', $request->get('symptom_id'))
            ->get();

        $mc = $request->input('motorcycle_id');
        $temp_damage = $rules->pluck('damage')->unique();
        $temp_km = $request->input('km');
        $temp_motorcycle = Motorcycle::where('id', '=', $mc)->first();

        $history = new History;
        $motorcycle = new Motorcycle;
        $motorcycle->id = $request->input('motorcycle_id');

        $history->motorcycle()->associate($motorcycle);
        $history->save();

        foreach ($temp_damage as $value) {
            $history_damage = HistoryDamage::create([
                'history_id' => $history->id,
                'damage' => $value->name,
            ]);
        }

        return view('guest.diagnosesresult', compact(['temp_damage', 'temp_km', 'temp_motorcycle']));

    }

    public function sparepart()
    {
        return view('guest.sparepart', ['sparepart' => Sparepart::index()]);
    }

    public function sparepartdetail(Sparepart $sparepart)
    {
        $newsparepart = Sparepart::indexLimit();

        return view('guest.sparepartdetail', compact('sparepart', 'newsparepart'));
    }

    public function article()
    {
        return view('guest.article', ['article' => Article::index()]);
    }

    public function articledetail(Article $article)
    {
        $newarticle = Article::indexLimit();

        return view('guest.articledetail', compact('article', 'newarticle'));
    }

    public function history(){
        $history=History::with('history_damages')->get();
        //dd($history);
        return view('guest.history',compact('history'));
    }

    // public function chartDamage(){

    //     $groups = DB::table('histories')
    //     ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
    //     ->select('motorcycles.name', DB::raw('count(*) as total'))
    //     ->groupBy('histories.motorcycle_id', 'motorcycles.name')
    //     ->pluck('total', 'name')
    //     ->all();

    //     for ($i=0; $i<=count($groups); $i++) {
    //     $colours[] = '#354F8E';
    //     }

    //     // Menampilkan Data Nama Kendaraan, Jumlah, Warna Ke Dalam Chart
    //     $chart = new Chart;
    //     $chart->labels = (array_keys($groups));
    //     $chart->dataset = (array_values($groups));
    //     $chart->colours = $colours;

    //     return view('guest.chart', compact('chart'));
    // }

    // public function chartBusi() {

    //     $groups = DB::table('history_damages')
    //     ->join('histories', 'history_damages.history_id', '=', 'histories.id')
    //     ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
    //     ->select('motorcycles.name', DB::raw('count(*) as total'))
    //     ->where('history_damages.damage', '=', 'busi') // Filter by "busi" damage
    //     ->groupBy('histories.motorcycle_id', 'motorcycles.name')
    //     ->pluck('total', 'name')
    //     ->all();

    //     for ($i=0; $i<=count($groups); $i++) {
    //     $colours[] = '#354F8E';
    //     }

    //     // Menampilkan Data Nama Kendaraan, Jumlah, Warna Ke Dalam Chart
    //     $chart = new Chart;
    //     $chart->labels = (array_keys($groups));
    //     $chart->dataset = (array_values($groups));
    //     $chart->colours = $colours;

    //     return view('guest.chart', compact('chart'));
    // }

    public function chartDamage()
    {
        $damageGroups = DB::table('histories')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $busiGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'Busi')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();
        
        $ecuGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'ECU')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $filterFuelPumpGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'Filter Fuel Pump')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $filterUdaraGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'Filter Udara')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $injektorGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'Injektor')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $kampasKoplingGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'Kampas Kopling')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $pistonGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'Piston')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $rollerGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'roller')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $vbeltGroups = DB::table('history_damages')
            ->join('histories', 'history_damages.history_id', '=', 'histories.id')
            ->join('motorcycles', 'histories.motorcycle_id', '=', 'motorcycles.id')
            ->select('motorcycles.name', DB::raw('count(*) as total'))
            ->where('history_damages.damage', '=', 'V - Belt')
            ->groupBy('histories.motorcycle_id', 'motorcycles.name')
            ->pluck('total', 'name')
            ->all();

        $damageColours = [];
        $busiColours = [];
        $ecuColours = [];
        $filterFuelPumpColours = [];
        $filterUdaraColours = [];
        $injektorColours = [];
        $kampasKoplingColours = [];
        $pistonColours = [];
        $rollerColours = [];
        $vbeltColours = [];

        for ($i = 0; $i < count($damageGroups); $i++) {
            $damageColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($busiGroups); $i++) {
            $busiColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($ecuGroups); $i++) {
            $ecuColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($filterFuelPumpGroups); $i++) {
            $filterFuelPumpColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($filterUdaraGroups); $i++) {
            $filterUdaraColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($injektorGroups); $i++) {
            $injektorColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($kampasKoplingGroups); $i++) {
            $kampasKoplingColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($pistonGroups); $i++) {
            $pistonColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($rollerGroups); $i++) {
            $rollerColours[] = '#354F8E';
        }

        for ($i = 0; $i < count($vbeltGroups); $i++) {
            $vbeltColours[] = '#354F8E';
        }

        // Membuat Data Chart untuk Damage
        $damageChart = new Chart;
        $damageChart->labels = array_keys($damageGroups);
        $damageChart->dataset = array_values($damageGroups);
        $damageChart->colours = $damageColours;

        // Membuat Data Chart untuk Busi
        $busiChart = new Chart;
        $busiChart->labels = array_keys($busiGroups);
        $busiChart->dataset = array_values($busiGroups);
        $busiChart->colours = $busiColours;

        // Membuat Data Chart untuk ECU
        $ecuChart = new Chart;
        $ecuChart->labels = array_keys($ecuGroups);
        $ecuChart->dataset = array_values($ecuGroups);
        $ecuChart->colours = $ecuColours;

        // Membuat Data Chart untuk Filter Fuel Pump
        $filterFuelPumpChart = new Chart;
        $filterFuelPumpChart->labels = array_keys($filterFuelPumpGroups);
        $filterFuelPumpChart->dataset = array_values($filterFuelPumpGroups);
        $filterFuelPumpChart->colours = $filterFuelPumpColours;

        // Membuat Data Chart untuk Filter Udara
        $filterUdaraChart = new Chart;
        $filterUdaraChart->labels = array_keys($filterUdaraGroups);
        $filterUdaraChart->dataset = array_values($filterUdaraGroups);
        $filterUdaraChart->colours = $filterUdaraColours;

        // Membuat Data Chart untuk Injektor
        $injektorChart = new Chart;
        $injektorChart->labels = array_keys($injektorGroups);
        $injektorChart->dataset = array_values($injektorGroups);
        $injektorChart->colours = $injektorColours;

        // Membuat Data Chart untuk Kampas Kopling
        $kampasKoplingChart = new Chart;
        $kampasKoplingChart->labels = array_keys($kampasKoplingGroups);
        $kampasKoplingChart->dataset = array_values($kampasKoplingGroups);
        $kampasKoplingChart->colours = $kampasKoplingColours;

        // Membuat Data Chart untuk Piston
        $pistonChart = new Chart;
        $pistonChart->labels = array_keys($pistonGroups);
        $pistonChart->dataset = array_values($pistonGroups);
        $pistonChart->colours = $pistonColours;

        // Membuat Data Chart untuk Roller
        $rollerChart = new Chart;
        $rollerChart->labels = array_keys($rollerGroups);
        $rollerChart->dataset = array_values($rollerGroups);
        $rollerChart->colours = $rollerColours;

        // Membuat Data Chart untuk V - Belt
        $vbeltChart = new Chart;
        $vbeltChart->labels = array_keys($vbeltGroups);
        $vbeltChart->dataset = array_values($vbeltGroups);
        $vbeltChart->colours = $vbeltColours;

        return view('guest.chart', compact(
            'damageChart', 'busiChart', 
            'ecuChart', 'filterFuelPumpChart',
            'filterUdaraChart', 'injektorChart', 
            'kampasKoplingChart', 'pistonChart', 
            'rollerChart', 'vbeltChart'
        ));
    }


}
