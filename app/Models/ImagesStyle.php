<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesStyle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'style_id',
    ];

    public function style() {
        return $this->belongsTo('App\Models\Style', 'style_id');
    }
}
