<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;;
use App\Models\Service;
use App\Models\Style;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('id', 'asc')->get();
        return view('admin.work.index', [
            'works' => $works
        ]);
    }

    public function image_index(Work $work)
    {
        return view('admin.image.index', [
            'images' => $work->images,
            'work' => $work
        ]);
    }

    public function style_index(Work $work)
    {
        return view('admin.style.index', [
            'style' => $work->style,
            'work' => $work
        ]);
    }

    public function create()
    {
        $services = Service::orderBy('id', 'asc')->get();
        $styles = Style::orderBy('id', 'asc')->get();

        return view('admin.work.create', [
            'services' => $services,
            'styles' => $styles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . '.' . $extension;

        Work::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'id_service' => $request->input('id_service'),
            'id_style' => $request->input('id_style'),
            'image' => $fileNameNew,
        ]);

        $request->file('image')->storeAs('public/image/works', $fileNameNew);

        return redirect()->back()->withSuccess('Пример работы был успешно добавлен!');
    }

    public function image_create(Work $work)
    {
        return view('admin.image.create', [
            'work' => $work
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Work $work
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        $services = Service::all();
        $styles = Style::all();
        return view('admin.work.edit', [
            'work' => $work,
            'services' => $services,
            'styles' => $styles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        Storage::delete('public/image/works/' . $work->image);
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . '.' . $extension;

        $work->title = $request->title;
        $work->description = $request->description;
        $work->date = $request->date;
        $work->id_service = $request->id_service;
        $work->id_style = $request->id_style;
        $work->image = $fileNameNew;
        $work->save();

        return redirect()->back()->withSuccess('Пример работы был успешно обновлен!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        if ($work->delete()) {
            Storage::delete('public/image/works/' . $work->image);
        }
        return redirect()->back()->withSuccess('Пример работы был успешно удален!');

    }
}
