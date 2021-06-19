<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function images() {
        return $this->hasMany('App\Models\ImagesStyle', 'style_id');
    }

    public function works() {
        return $this->hasMany('App\Models\Work', 'id_style');
    }
}
