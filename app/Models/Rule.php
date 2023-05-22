<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'damage_id',
        'G001',
        'G002',
        'G003',
        'G004',
        'G005',
        'G006',
        'G007',
        'G008',
        'G009',
        'G010',
        'G011',
        'G012',
        'G013',
        'G014',
        'G015',
        'G016',
        'G017',
        'G018',
        'G019',
        'G020',
    ];
    
    public static function index()
    {
        return Rule::all();
    }

    public static function store(Request $request)
    {
        Rule::create($request->all());
    }

    public static function edit(Request $request, Rule $rule)
    {
        $rule->update($request->all());
    }
}
