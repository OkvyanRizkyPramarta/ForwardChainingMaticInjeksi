<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'merk',
        'description',
        'price',
        'image',
    ];

    public static function index()
    {
        return Sparepart::all();
    }

    public static function indexLimit()
    {
        return Sparepart::orderByDesc('created_at')->limit(3)->get();
    }
    
}
