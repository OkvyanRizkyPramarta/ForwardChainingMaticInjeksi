<?php

namespace App\Http\Controllers;

use App\Models\Damage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DamageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.damage.index', ['damage' => Damage::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.damage.create');
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
            'code' => 'required|max:8',
            'name' => 'required|max:255',
            'solution' => 'required'
        ]);
    
        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }
        
        Damage::store($request);
        Alert::toast('Data Kerusakan Baru Berhasil Dibuat.', 'success');
        return redirect()->route('damage.index');
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
    public function edit(Damage $damage)
    {
        return view('admin.damage.edit', compact('damage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Damage $damage)
    {
        $this->validate($request, [
            'code' => 'required|max:8',
            'name' => 'required|max:255',
            'solution' => 'required'
        ]);

        $damage = Damage::findOrFail($damage->id);

        $damage->update([
            'code'     => $request->code,
            'name'     => $request->name,
            'solution'     => $request->solution,
        ]);

        Alert::toast('Data berhasil diubah.', 'success');
        return redirect()->route('damage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Damage $damage)
    {
        $damage->delete();

        Alert::toast('Data Kerusakan Berhasil Dihapus.', 'success');
        return redirect()->back();
    }
}
