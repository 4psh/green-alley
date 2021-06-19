<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images_work extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_work'
    ];

    public function work() {
        return $this->belongsTo('App\Models\Work', 'id_work');
    }
}
