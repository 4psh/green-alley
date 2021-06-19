<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StyleRequest;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StyleController extends Controller
{
//    public function index()
//    {
//        $styles = Style::orderBy('id', 'asc')->get();
//        return view('admin.style.index', [
//            'styles' => $styles
//        ]);
//    }
//
    public function image_index(Style $style)
    {
        return view('admin.img.index', [
            'images' => $style->images,
            'style' => $style
        ]);
    }

    public function create()
    {
        $styles = Style::orderBy('id', 'asc')->get();

        return view('admin.style.create', [
            'styles' => $styles,
        ]);
    }

    public function store(StyleRequest $request)
    {

        Style::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->back()->withSuccess('Стиль был успешно добавлен!');
    }

    public function image_create(Style $style)
    {
        return view('admin.img.create', [
            'style' => $style
        ]);
    }

    public function show()
    {
        //
    }

    public function edit(Style $style)
    {
        return view('admin.style.edit', [
            'style' => $style
        ]);
    }

    public function update(Request $request, Style $style)
    {
        $style->name = $request->name;
        $style->description = $request->description;
        $style->save();

        return redirect()->back()->withSuccess('Стиль был успешно обновлен!');
    }

    public function destroy(Style $style)
    {
        Storage::deleteDirectory('public/image/styles/' . $style->name);
        return redirect()->back()->withSuccess('Стиль был успешно удален!');

    }
}
