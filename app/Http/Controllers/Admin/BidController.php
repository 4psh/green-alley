<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bid;

class BidController extends Controller
{
    public function index()
    {
        $bids = Bid::all();
        if(request()->status == 1){
            $bids = Bid::where('status', '1')->get();
        } else if(request()->status == 0) {
            $bids = Bid::where('status', '0')->get();
        }
        session(['status' => request()->status]);
        return view('admin.bid.index', [
            'bids' => $bids
        ]);
    }

    public function edit(Bid $bid)
    {
        return view('admin.bid.edit', [
            'bid' => $bid
        ]);
    }

    public function update(Bid $bid)
    {
        $bid->status = !$bid->status;
        $bid->save();

        return redirect()->back()->withSuccess('Статус заявки был успешно изменен!');
    }

    public function destroy(Bid $bid)
    {
        $bid->delete();
        return redirect()->back()->withSuccess('Заявка была успешно удалена!');
    }

}
