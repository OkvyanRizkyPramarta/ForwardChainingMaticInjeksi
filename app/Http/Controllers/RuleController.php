<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Damage;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rule.index', ['rule' => Rule::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $damage = Damage::all();
        $symptom = Symptom::all();
        return view('admin.rule.create', compact('damage', 'symptom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'damage_id' => 'required',
            'symptom_id' => 'required',
        ]);

        $rule = new Rule;
        $rule->id = $request->get('id');

        $damage = new Damage;
        $damage->id = $request->get('damage_id');

        $symptom = new Symptom;
        $symptom->id = $request->get('symptom_id');

        $rule->damage()->associate($damage);
        $rule->symptom()->associate($symptom);

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        $rule->save();

        Alert::toast('Data rule baru berhasil dibuat.', 'success');
        return redirect()->route('rule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rule $rule)
    {
        $rule->delete();

        Alert::toast('Data Rule Berhasil Dihapus.', 'success');
        return redirect()->back();
    }
}
