<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Damage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'code',
        'name',
        'solution'
    ];
    
    public static function index()
    {
        return Damage::all();
    }

    public static function store(Request $request)
    {
        Damage::create($request->all());
    }

    public static function edit(Request $request, Damage $damage)
    {
        $damage->update($request->all());
    }
}
