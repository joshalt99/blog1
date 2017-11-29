<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index()
    {

        //get the latest Posts from the database

        $blogs = Blog::latest()->get();

        return view('blog.index', compact('blogs'));

    }

    public  function create()
    {

        return view('blog.create');

    }


}
