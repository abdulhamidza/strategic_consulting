<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function about()
    {
        return view('front.about');
    }

    public function our_work()
    {
        return view('front.our-work');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function clients()
    {
        return view('front.clients');
    }
}
