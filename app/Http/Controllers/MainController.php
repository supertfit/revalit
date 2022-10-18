<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home', ['menu_no' => 1, ]);
    }

    public function productionProcess() {
        return view('production-process', ['menu_no' => 2, ]);
    }

    public function news() {
        return view('news', ['menu_no' => 3, ]);
    }

    public function contact() {
        return view('contact', ['menu_no' => 4, ]);
    }

    public function aboutUs() {
        return view('about-us', ['menu_no' => 5, ]);
    }
}
