<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoriesService;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Images_work;
use App\Models\ImagesStyle;
use App\Models\MeasureUnit;
use App\Models\Service;
use App\Models\Social;
use App\Models\Style;
use App\Models\Work;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $categories = CategoriesService::all();
        $employees = Employee::all();
        $works = Work::where('created_at', '>', Carbon::now()->subDays(200))->get(); // 20-30 дней
        $images = Images_work::all();
        $contacts = Contact::all();
        $services = Service::all();
        $units = MeasureUnit::all();
        $social = Social::all();
        $about = About::where('id', '1')->first();
        return view('index', compact('categories', 'employees', 'works', 'units', 'images', 'contacts', 'services', 'social', 'about'));
    }

    public function about_index()
    {
        $employees = Employee::all();
        $categories = CategoriesService::all();
        $services = Service::all();
        $social = Social::all();
        $contacts = Contact::all();
        $abouts = About::all();
        return view('about', compact('employees', 'categories', 'services', 'social', 'contacts', 'abouts'));
    }

    public function categories_index()
    {
        $contacts = Contact::all();
        $social = Social::all();
        $services = Service::all();
        $categories = CategoriesService::all();
        return view('categories', compact('contacts', 'services', 'social', 'categories'));
    }

    public function bid_index()
    {
        $contacts = Contact::all();
        $social = Social::all();
        $services = Service::all();
        $categories = CategoriesService::all();
        return view('bid', compact('contacts', 'social', 'services', 'categories'));
    }

    public function services_index(CategoriesService $category)
    {
        $contacts = Contact::all();
        $social = Social::all();
        $services = $category->services;
        $units = MeasureUnit::all();
        $categories = CategoriesService::all();
        return view('services', compact('contacts', 'social', 'categories', 'services', 'units', 'category'));
    }

    public function works_index()
    {
        $contacts = Contact::all();
        $social = Social::all();
        $works = Work::simplePaginate(6);
        $categories = CategoriesService::all();
        $styles = Style::all();
        $services = Service::all();
        return view('works', compact('contacts', 'social', 'services', 'works', 'categories', 'styles'));
    }

    public function styles_index()
    {
        $contacts = Contact::all();
        $social = Social::all();
        $styles = Style::all();
        $services = Service::all();
        $categories = CategoriesService::all();
        $img = ImagesStyle::all();
        return view('styles', compact('contacts', 'categories', 'services', 'social', 'styles', 'img'));
    }

    public function style_index(Work $work)
    {
        $contacts = Contact::all();
        $social = Social::all();
        $style = $work->style;
        $img = ImagesStyle::all();
        $services = Service::all();
        $categories = CategoriesService::all();
        return view('style', compact('contacts', 'social', 'style', 'img', 'categories', 'services'));
    }

    public function images_index(Work $work)
    {
        $contacts = Contact::all();
        $social = Social::all();
        $images = $work->images;
        $works = Work::where('id', $work);
        return view('images', compact('contacts', 'works', 'social', 'images', 'work'));
    }

    public function contacts_index()
    {
        $contacts = Contact::all();
        $social = Social::all();
        $services = Service::all();
        $services = Service::all();
        $categories = CategoriesService::all();
        return view('contacts', compact('contacts', 'social', 'services', 'categories', 'services'));
    }

    public function signin_index()
    {
        $contacts = Contact::all();
        $social = Social::all();
        return view('auth.login', compact('contacts', 'social'));
    }

    public function register_index()
    {
        $contacts = Contact::all();
        $social = Social::all();
        return view('auth.register', compact('contacts', 'social'));
    }

}
