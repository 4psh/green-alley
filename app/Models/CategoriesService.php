<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesService extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'brief',
        'image',
    ];

    public function services() {
        return $this->hasMany(Service::class, 'id_cat');
    }

}
