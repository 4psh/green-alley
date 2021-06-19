<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'email',
        'id_service',
        'description',
        'status'
    ];

    public function service() {
        return $this->belongsTo(Service::class, 'id_service');
    }
}
