<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'id_service',
        'id_style'
    ];

    public function service() {
        return $this->belongsTo('App\Models\Service', 'id_service');
    }

    public function style() {
        return $this->belongsTo('App\Models\Style', 'id_style');
    }

    public function images() {
        return $this->hasMany('App\Models\Images_work', 'id_work');
    }

}
