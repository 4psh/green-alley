<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImagesStyleRequest;
use App\Models\ImagesStyle;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesStyleController extends Controller
{
    public function index()
    {
        //
    }

    public function update(Request $request, ImagesStyle $img)
    {
        Storage::delete('public/image/styles/' . $img->name);
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . '.' . $extension;

        $img->name = $fileNameNew;
        $img->save();
        $request->file('image')->storeAs('public/image/styles/', $fileNameNew);

        return redirect()->back()->withSuccess('Изображение было успешно обновлено!');

    }

    public function store(ImagesStyleRequest $request)
    {
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . "." . $extension;

        ImagesStyle::create([
            'name' => $fileNameNew,
            'style_id' => $request->input('style_id'),
        ]);

        $request->file('image')->storeAs('public/image/styles/', $fileNameNew);

        return redirect()->back()->withSuccess('Изображение было успешно добавлено!');

    }

    public function create()
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit(ImagesStyle $img)
    {
        return view('admin.img.edit', [
            'img' => $img,
        ]);
    }


    public function destroy(ImagesStyle $img)
    {
        if ($img->delete()) {
            Storage::delete('public/image/styles/' . $img->name);
        }
        return redirect()->back()->withSuccess('Изображение было успешно удалено!');
    }
}
