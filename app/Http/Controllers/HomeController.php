<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $posts = $category->posts->sortBy('created_at');
            $leftmenu = $category->posts->sortBy('created_at');
        }
        return view('home', compact('posts', 'leftmenu'));
    }
}
