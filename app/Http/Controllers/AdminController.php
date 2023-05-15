<?php

namespace App\Http\Controllers;

use App\Models\Damage;
use App\Models\Symptom;
use App\Models\Sparepart;
use App\Models\Article;
use Illuminate\Http\Request;

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
        return view('admin.index', compact('damage', 'symptom', 'sparepart', 'article', 'newarticle', 'newsparepart'));
    }
}
