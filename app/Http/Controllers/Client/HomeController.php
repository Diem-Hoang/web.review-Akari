<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('web.home',['posts' => $posts]);
        // return view('web.home');
    }

    public function achiver()
    {
        return view('web.achiver');
    }

    public function postgallery()
    {
        return view('web.postgallery');
    }
}
