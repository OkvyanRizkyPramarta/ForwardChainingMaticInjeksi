<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index', ['article' => Article::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
            'title' => 'required',
            'writer' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
            
            Article::create([
                'title' => $request->title,
                'writer' => $request->writer,
                'description' => $request->description,
                'image' => $image_name,
            ]);
        }

        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        Alert::toast('Data Berita / Informasi Baru Berhasil Dibuat.', 'success');
        return redirect()->route('article.index');
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
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required',
            'writer' => 'required',
            'description' => 'required',
        ]);

        $article = Article::findOrFail($article->id);

        if($request->file('image') == "") {

            $article->update([
                'title' => $request->title,
                'writer' => $request->writer,
                'description' => $request->description,
            ]);

        } else {

            if ($article->image&&file_exists(storage_path('app/public/'.$article->image))) {
                \Storage::delete('public/'.$article->image);
            }

        $image = $request->file('image');
        $image->storeAs('public/', $image->hashName());

        $article->update([
            'title' => $request->title,
            'writer' => $request->writer,
            'description' => $request->description,
            'image'     => $image->hashName()
        ]);
    }

        Alert::toast('Data berhasil diubah.', 'success');
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        Alert::toast('Data Berita / Informasi Berhasil Dihapus.', 'success');
        return redirect()->back();
    }
}
