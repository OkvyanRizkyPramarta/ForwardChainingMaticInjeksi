<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use App\Models\Damage;
use App\Models\Sparepart;
use App\Models\Article;
use App\Models\Motorcycle;
use App\Models\Diagnoses;
use App\Models\Rule;
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
        // $validator = Validator::make($request->all(), [
            // 'km' => 'required',
            // 'rule_id' => 'required',
            // 'motorcycle_id' => 'required',
        // ]);

        //Mencari Id Yang diinputkan
        $qry = DB::table('rules')->select('id');
        $rule_input = array();
        foreach ($request->except('_token') as $where) {
            $qry->where($where,'=','1');
            array_push($rule_input,$where);
        }
        $qry->whereRaw('1 = 1')->get();
        $id='';

        //Menentukan Rule
        $rule = [
            // K001
            // ['G001'],['G004'],['G007'],['G012'],

            // ['G001','G004'],['G001','G007'],['G001','G012'],
            // ['G004','G007'],['G004','G012'],
            // ['G007','G012'],

            // ['G001','G004','G007'],['G004','G007','G012'],
            // ['G001','G007','G012'],['G001','G004','G012'],
            
            ['G001','G004','G007','G012'],
            //K002
            // ['G002'],['G005'],['G009'],['G016'],

            // ['G002','G005'],['G002','G009'],['G002','G016'],
            // ['G005','G009'],['G005','G016'],
            // ['G009','G016'],

            // ['G002','G005','G009'],['G005','G009','G016'],
            // ['G002','G009','G016'],['G002','G005','G016'],

            ['G002','G005','G009','G016'],
        ];

        $status=false;

        //Mencocokan gejala yang di inputkan user dengan rule yang ada
        for($i=0; $i < sizeof($rule); $i++){
            $result = ($rule_input==$rule[$i]);
            if($result){
                $status=true;
            }
        }

        //Jika ditemukan akan menampilkan info dan solusi dari kerusakan
        if($status==true){
            $id = $qry->value('id');
            $temp_damage = Damage::where('id','=',$id)->get();
            $temp_symptom = Symptom::where('id','=',$id)->get();
            return view('guest.diagnosesresult',compact(['temp_damage','temp_symptom']));
        }else{
            return view('guest.diagnosesnothing');
        }

        // $diagnoses = new Diagnoses;
        // $diagnoses->id = $request->get('id');
        // $diagnoses->km = $request->get('km');

        // $motorcycle = new Motorcycle;
        // $motorcycle->id = $request->get('motorcycle_id');

        // $rule = new Rule;
        // $rule->id = $request->get('rule_id');

        // $diagnoses->motorcycle()->associate($motorcycle);
        // $diagnoses->rule()->associate($rule);

        // if ($validator->fails()) {
        //     Alert::toast($validator->messages()->all()[0], 'error');
        //     return redirect()->back()->withInput();
        // }

        // $diagnoses->save();

        // Alert::toast('Data Gejala Sudah Diproses.', 'success');
        // return redirect()->route('guest.diagnoses.result');

    }

    // public function diagnosesResult()
    // {
    //     return view('guest.diagnosesresult');
    // }

    // public function diagnosesNothing()
    // {
    //     return view('guest.diagnosesnothing');
    // }

    public function sparepart()
    {
        return view('guest.sparepart', ['sparepart' => Sparepart::index()]);
    }

    public function article()
    {
        return view('guest.article', ['article' => Article::index()]);
    }
}
