<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Diagnoses extends Model
{
    use HasFactory;

    protected $fillable = [
        'km',
        'rule_id',
        'motorcycle_id',
    ];

    public function rule() {
        return $this->belongsTo(Rule::class);
    }

    public function motorcycle() {
        return $this->belongsTo(Motorcycle::class);
    }

}
