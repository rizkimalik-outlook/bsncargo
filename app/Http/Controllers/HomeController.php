<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Slider;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $company = Company::first();
        $services = Service::get();
        $sliders = Slider::orderBy('id', 'desc')->take(10)->get();
        $clients = Client::orderBy('id', 'desc')->take(10)->get();
        $gallerySliders = Gallery::orderBy('id', 'desc')->take(10)->get();


        return view('home', [
            'company' => $company, 
            'sliders' => $sliders, 
            'services' => $services, 
            'clients' => $clients,
            'gallerySliders' => $gallerySliders
        ]);
    }
    
}
