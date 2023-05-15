<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Symptom extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];

    public static function index()
    {
        return Symptom::all();
    }

    public static function store(Request $request)
    {
        Symptom::create($request->all());
    }

    public static function edit(Request $request, Symptom $symptom)
    {
        $symptom->update($request->all());
    }
}
