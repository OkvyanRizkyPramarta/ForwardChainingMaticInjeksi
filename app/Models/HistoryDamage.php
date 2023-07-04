<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDamage extends Model
{
    use HasFactory;
    protected $table = 'history_damages';
    protected $guarded = [];

    public function history() {
        return $this->belongsTo(history::class);
    }

    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }
}
