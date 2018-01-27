<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class InformationController extends Controller
{


    public function index()
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }
        $informations = Category::all()->where('slug', 'informaciya');
        return view('information.index', compact('informations', 'leftmenu'));
    }

    public function show($slug)
    {
        $information = Category::all()->where('slug', 'katalog-materialov');
        foreach ($information as $inform) {
            $leftmenu = $inform->posts->sortBy('created_at');
        }

        $information = Post::where('slug', '=', $slug)->firstOrFail();
        return view('information.show', compact('information', 'leftmenu'));
    }
}
