<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Models\Images_work;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function index()
    {
        //
    }

    public function update(Request $request, Images_work $image)
    {
        Storage::delete('public/image/works/' . $image->name);
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . '.' . $extension;

        $image->name = $fileNameNew;
        $image->save();
        $request->file('image')->storeAs('public/image/works/', $fileNameNew);

        return redirect()->back()->withSuccess('Изображение было успешно обновлено!');

    }

    public function store(ImageRequest $request)
    {
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . "." . $extension;

        Images_work::create([
            'name' => $fileNameNew,
            'id_work' => $request->input('id_work'),
        ]);

        $request->file('image')->storeAs('public/image/works/', $fileNameNew);

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

    public function edit(Images_work $image)
    {
        return view('admin.image.edit', [
            'image' => $image,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Images_work $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images_work $image)
    {
        if ($image->delete()) {
            Storage::delete('public/image/works/' . $image->name);
        }
        return redirect()->back()->withSuccess('Изображение было успешно удалено!');

    }
}
