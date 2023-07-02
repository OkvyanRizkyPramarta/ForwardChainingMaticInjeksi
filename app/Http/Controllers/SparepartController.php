<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sparepart.index', ['sparepart' => Sparepart::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sparepart.create');
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
            'name' => 'required',
            'merk' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
            
            Sparepart::create([
                'name' => $request->name,
                'merk' => $request->merk,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $image_name,
            ]);
        }

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('Data Spare Part Baru Berhasil Dibuat.', 'success');
        return redirect()->route('sparepart.index');
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
    public function edit(Sparepart $sparepart)
    {
        return view('admin.sparepart.edit', compact('sparepart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sparepart $sparepart)
    {
        $this->validate($request, [
            'name' => 'required',
            'merk' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $sparepart = Sparepart::findOrFail($sparepart->id);

        if($request->file('image') == "") {

            $sparepart->update([
                'name' => $request->name,
                'merk' => $request->merk,
                'description' => $request->description,
                'price' => $request->price,
            ]);

        } else {

            if ($sparepart->image&&file_exists(storage_path('app/public/'.$sparepart->image))) {
                \Storage::delete('public/'.$sparepart->image);
            }

        $image = $request->file('image');
        $image->storeAs('public/', $image->hashName());

        $sparepart->update([
            'name'     => $request->name,
            'merk'     => $request->merk,
            'description' => $request->description,
            'price' => $request->price,
            'image'     => $image->hashName()
        ]);
    }

        Alert::toast('Data berhasil diubah.', 'success');
        return redirect()->route('sparepart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sparepart $sparepart)
    {
        $sparepart->delete();

        Alert::toast('Data Spare Part Berhasil Dihapus.', 'success');
        return redirect()->back();
    }
}
