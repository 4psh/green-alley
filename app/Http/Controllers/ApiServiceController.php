<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ApiServiceController extends Controller
{
    public function filter($service) {
        $service = Service::where(
            'id_cat', $service
        )->get();

        return $service;
    }
}
