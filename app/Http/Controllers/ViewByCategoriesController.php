<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ViewByCategoriesController extends Controller
{

    //Food & Drink
    public function ViewByFood()
    {
        $posts = Post::where('category_id', '1')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.food_drink.cooking',['posts' => $posts]);
        // return view('web.home');
    }
    public function ViewByDrink()
    {
        $posts = Post::where('category_id', '2')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.food_drink.drink',['posts' => $posts]);
        // return view('web.home');
    }

    //Tourism
    public function ViewByEcotourism()
    {
        $posts = Post::where('category_id', '3')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.tourism.ecotourism',['posts' => $posts]);
        // return view('web.home');
    }
    public function ViewByMuseum()
    {
        $posts = Post::where('category_id', '4')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.tourism.museum',['posts' => $posts]);
        // return view('web.home');
    }
    public function ViewByResort()
    {
        $posts = Post::where('category_id', '5')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.tourism.resort',['posts' => $posts]);
        // return view('web.home');
    }

    //Entertainment
    public function ViewByPark()
    {
        $posts = Post::where('category_id', '6')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.entertainment.park',['posts' => $posts]);
        // return view('web.home');
    }
    public function ViewBySuperMarket()
    {
        $posts = Post::where('category_id', '7')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.entertainment.supermarket',['posts' => $posts]);
        // return view('web.home');
    }
    public function ViewByTheater()
    {
        $posts = Post::where('category_id', '8')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.entertainment.theater',['posts' => $posts]);
        // return view('web.home');
    }

    //Service
    public function ViewByCarRental()
    {
        $posts = Post::where('category_id', '9')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.service.carrent',['posts' => $posts]);
        // return view('web.home');
    }
    public function ViewByLaundry()
    {
        $posts = Post::where('category_id', '10')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.service.laundry',['posts' => $posts]);
        // return view('web.home');
    }
    public function ViewBySpa()
    {
        $posts = Post::where('category_id', '11')->orderBy('id', 'DESC')->paginate(3);;
        return view('web.categories_nav.service.spa',['posts' => $posts]);
        // return view('web.home');
    }
}
