<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $guarded = [];
    public function history_damage()
    {
        return $this->hasMany(HistoryDamage::class);
    }
}
