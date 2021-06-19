<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\CategoriesService;
use App\Models\MeasureUnit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoriesService::orderBy('id', 'asc')->get();
        return view('admin.category.index', [
            'categories' => $categories
        ]);
    }

    public function service_index(CategoriesService $category)
    {
        return view('admin.service.index', [
            'services' => $category->services,
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    public function service_create(CategoriesService $category)
    {
        $units = MeasureUnit::all();

        return view('admin.service.create', [
            'category' => $category,
            'units' => $units
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $fullFileName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . "." . $extension;

        CategoriesService::create([
            'title' => $request->input('title'),
            'brief' => $request->input('brief'),
            'image' => $fileNameNew
        ]);

        $request->file('image')->storeAs('public/image/categories', $fileNameNew);

        return redirect()->back()->withSuccess('Категория услуг была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CategoriesService $category
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriesService $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CategoriesService $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(CategoriesService $category)
    {
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CategoriesService $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesService $category)
    {
//        if (Storage::delete('public/image/categories/' . $category->image)) {

        Storage::delete('public/image/categories/' . $category->image);
            $fullFileName = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $fileNameNew = $fileName . '_' . time() . '.' . $extension;

            //$category = new CategoriesService();
            $category->title = $request->title;
            $category->brief = $request->brief;
            $category->image = $fileNameNew;
            $category->save();
            $request->file('image')->storeAs('public/image/categories', $fileNameNew);
//        }

        return redirect()->back()->withSuccess('Категория услуг была успешно обновлена!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CategoriesService $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriesService $category)
    {
        if ($category->delete()) {
            Storage::delete('public/image/categories/' . $category->image);
        }
        return redirect()->back()->withSuccess('Категория услуг была успешно удалена!');

    }
}
