<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('id', 'asc')->get();
        return view('admin.about.index', [
            'abouts' => $abouts
        ]);
    }

    public function create()
    {
        return view('admin.about.create');
    }


    public function store(AboutRequest $request)
    {
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . "." . $extension;

        About::create([
            'title' => $request->input('title'),
            'brief' => $request->input('brief'),
            'description' => $request->input('description'),
            'image' => $fileNameNew
        ]);

        $request->file('image')->storeAs('public/image/about', $fileNameNew);

        return redirect()->back()->withSuccess('Описание было успешно добавлено!');
    }

    public function show(About $about)
    {
        //
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', [
            'about' => $about
        ]);
    }

    public function update(Request $request, About $about)
    {
        Storage::delete('public/image/about/' . $about->image);
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . '.' . $extension;

        $about->title = $request->title;
        $about->brief = $request->brief;
        $about->description = $request->description;
        $about->image = $fileNameNew;
        $about->save();
        $request->file('image')->storeAs('public/image/about', $fileNameNew);

        return redirect()->back()->withSuccess('Описание было успешно обновлено!');

    }

    public function destroy(About $about)
    {
        if ($about->delete()) {
            Storage::delete('public/image/about/' . $about->image);
        }
        return redirect()->back()->withSuccess('Описание было успешно удалено!');

    }
}
