<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    private const SERVICE_SLUGS = [
        'urgent-care',
        '24-hour-care',
        'hourly-care',
        'live-in-care-for-couples',
        'overnight-care',
        'palliative-care',
        'dementia-care',
        'parkinsons-disease',
        'supported-living',
        'holiday-companionship',
        'carer-respite',
        'stroke-care',
        'cancer-care',
        'hospital-to-home',
        'companionship-care',
        'housekeeping-services',
    ];

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function contact()
    {
        return view('pages.contact-us');
    }

    public function join()
    {
        return view('pages.join-us');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function faqs()
    {
        return view('pages.faqs');
    }

    public function appointment()
    {
        return view('pages.appointment');
    }

    public function servicesIndex()
    {
        return view('pages.services.index');
    }

    public function serviceShow(string $slug)
    {
        if (! in_array($slug, self::SERVICE_SLUGS, true)) {
            abort(404);
        }

        return view('pages.services.'.$slug);
    }
}
