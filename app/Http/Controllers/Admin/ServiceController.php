<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\CategoriesService;
use App\Models\MeasureUnit;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
//    public function index()
//    {
//        $services = Service::orderBy('created_at', 'asc')->get();
//        $units = MeasureUnit::all();
//        $categories = CategoriesService::all();
//        return view('admin.service.index', [
//            'services' => $services,
//            'units' => $units,
//            'categories' => $categories
//        ]);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
//    public function create()
//    {
//        $units = MeasureUnit::all();
//        $categories = CategoriesService::all();
//
//        return view('admin.service.create', [
//            'units' => $units,
//            'categories' => $categories
//        ]);
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        Service::create([
            'title' => $request->input('title'),
            'note' => $request->input('note'),
            'min_price' => $request->input('min_price'),
            'id_unit' => $request->input('id_unit'),
            'id_cat' => $request->input('id_cat'),
        ]);

        return redirect()->back()->withSuccess('Услуга была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $units = MeasureUnit::all();
        $categories = CategoriesService::all();
        return view('admin.service.edit', [
            'service' => $service,
            'units' => $units,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
            $service->title = $request->title;
            $service->note = $request->note;
            $service->min_price = $request->min_price;
            $service->id_unit = $request->id_unit;
            $service->id_cat = $request->id_cat;
            $service->save();

        return redirect()->back()->withSuccess('Услуга была успешно обновлена!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->withSuccess('Услуга была успешно удалена!');
    }
}
