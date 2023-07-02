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

    // public function chart(){

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

}
