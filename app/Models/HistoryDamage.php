<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDamage extends Model
{
    use HasFactory;
    protected $table = 'history_damage';
    protected $guarded = [];

    public function history() {
        return $this->belongsTo(history::class);
    }
}
