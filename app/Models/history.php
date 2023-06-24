<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';
    protected $guarded = [];

    public function history_damages()
    {
        return $this->hasMany(HistoryDamage::class);
    }

    public function motorcycle() {
        return $this->belongsTo(Motorcycle::class);
    }
}
