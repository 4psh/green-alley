<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('id', 'asc')->get();
        return view('admin.page.index', [
            'pages' => $pages
        ]);
    }

    public function create()
    {
     //
    }


    public function store()
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
       //
    }

    public function update()
    {
        //

    }

    public function destroy()
    {
        //
    }
}
