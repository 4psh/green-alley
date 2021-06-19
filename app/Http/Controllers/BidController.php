<?php

namespace App\Http\Controllers;

use App\Http\Requests\BidRequest;
use App\Models\Bid;


class BidController extends Controller
{
    public function create()
    {

    }

    public function store(BidRequest $request)
    {
        Bid::create($request->all());
        return redirect('/#bid')->withSuccess('Заявка была успешно отправлена!');
    }


}
