<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'writer',
        'description',
        'image',
    ];

    public static function index()
    {
        return Article::all();
    }

    public static function indexLimit()
    {
        return Article::orderByDesc('created_at')->limit(3)->get();
    }
}
