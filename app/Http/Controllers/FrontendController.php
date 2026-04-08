<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Setting;

public function index()
{
    $services = Service::all();
    $testimonials = Testimonial::all();
    $settings = Setting::first();

    return view('frontend.index', compact('services', 'testimonials', 'settings'));
}
