<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\About;
use App\Contact;
use App\TextBlock;
use App\Main;

class SiteController extends FrontendController
{
    public function index()
    {
        $mainPages = Main::get();
        $currentUrl = \Request::segment(null);
        //dd($main->toArray());
    	return view('frontend.index', compact('currentUrl', 'mainPages'));
    }

    public function about(Request $request)
    {
        $currentUrl = \Request::segment(1);
        $aboutPage = About::all();
        foreach($aboutPage as $about)
        {
            $background = $about->images;
            //dd($background);
        }

    	return view('frontend.about', compact('currentUrl', 'background'))->with(['aboutPage'=>$aboutPage]);
    }

    public function products()
    {
        $currentUrl = \Request::segment(1);
        $text = TextBlock::where('blockname', 'products.maintext')->first();
      
    	return view('frontend.products', compact('currentUrl'))->with(['maintext'=>$text]);
    }

    public function contacts()
    {
        $currentUrl = \Request::segment(1);
		$contacts = Contact::all();
    	return view('frontend.contacts', compact('currentUrl'))->with(['contacts'=>$contacts, 'message' => '']);
    }
}
