<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Social;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $contacts = Contact::all();
        $social = Social::all();
        return view('home', compact('users', 'contacts', 'social'));
    }
}
