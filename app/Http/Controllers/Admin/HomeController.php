<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Bid;
use App\Models\CategoriesService;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Images_work;
use App\Models\ImagesStyle;
use App\Models\Page;
use App\Models\Service;
use App\Models\Social;
use App\Models\Style;
use App\Models\Work;

class HomeController extends Controller
{
    public function index()
    {
        $services_count = Service::all()->count();
        $categories_count = CategoriesService::all()->count();
        $employees_count = Employee::all()->count();
        $works_count = Work::all()->count();
        $pages_count = Page::all()->count();
        $bids_count = Bid::all()->count();
        $about_count = About::all()->count();
        $contacts_count = Contact::all()->count();
        $images_work_count = Images_work::all()->count();
        $images_style_count = ImagesStyle::all()->count();
        $socials_count = Social::all()->count();
        $styles_count = Style::all()->count();


        return view('admin.home.index', [
            'services_count' => $services_count,
            'categories_count' => $categories_count,
            'employees_count' => $employees_count,
            'works_count' => $works_count,
            'pages_count' => $pages_count,
            'bids_count' => $bids_count,
            'contacts_count' => $contacts_count,
            'images_work_count' => $images_work_count,
            'images_style_count' => $images_style_count,
            'about_count' => $about_count,
            'socials_count' => $socials_count,
            'styles_count' => $styles_count,
        ]);
    }
}
