<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $social = Social::orderBy('id', 'asc')->get();
        return view('admin.social.index', [
            'social' => $social
        ]);
    }

    public function create()
    {
        return view('admin.social.create');
    }

    public function store(SocialRequest $request)
    {
        Social::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->back()->withSuccess('Социальная сеть была успешно добавлена!');
    }

    public function edit(Social $social)
    {
        return view('admin.social.edit', [
            'social' => $social
        ]);
    }

    public function show()
    {
        //
    }

    public function update(Request $request, Social $social)
    {
        $social->name = $request->name;
        $social->save();

        return redirect()->back()->withSuccess('Социальная сеть была успешно обновлена!');

    }

    public function destroy(Social $social)
    {
        $social->delete();
        return redirect()->back()->withSuccess('Социальная сеть была успешно удалена!');

    }
}
