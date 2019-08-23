<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::orderBy('display_order')->get();
        return view('home',
            ['categories'=> $categories]);
    }

    public function menu()
    {
//        $flights = App\Flight::where('active', 1)
//            ->orderBy('name', 'desc')
//            ->take(10)
//            ->get();

        $categories = Category::orderBy('display_order')->get();
        $starters = Category::find(1)->menuItems;
        $salads = Category::find(2)->menuItems;
        $entrees = Category::find(3)->menuItems;
        $desserts = Category::find(4)->menuItems;


        return view('menu',
            ['categories'=> $categories,
             'starters'=> $starters,
             'salads'=> $salads,
             'entrees'=> $entrees,
             'desserts'=> $desserts
            ]
        );
    }
//    public function admin()
//    {
//
//        $categories = Category::orderBy('display_order')->get();
//        return view('welcome',
//            ['categories'=> $categories]);
//    }
}
