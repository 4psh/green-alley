<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'note',
        'description',
        'min_price',
        'id_cat',
        'id_unit'
    ];

    public function category() {
        return $this->belongsTo(CategoriesService::class, 'id_cat');
    }

    public function works() {
        return $this->hasMany(Work::class, 'id_service');
    }

    public function unit() {
        return $this->belongsTo(MeasureUnit::class, 'id_unit');
    }

    public function bids() {
        return $this->hasMany(Bid::class, 'id_service');
    }
}
