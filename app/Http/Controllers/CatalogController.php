<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalog = Post::all();

        return view('catalog.index', compact('catalog'));
    }

    public function show($slug)
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }

        $material = Post::where('slug', '=', $slug)->firstOrFail();
        return view('catalog.show', compact('material', 'leftmenu'));
    }

    public function pesok($slug)
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }

        $material = Post::where('slug', '=', $slug)->firstOrFail();
        return view('catalog.pesok.show', compact('material', 'leftmenu'));
    }

    public function shheben($slug)
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }

        $material = Post::where('slug', '=', $slug)->firstOrFail();
        return view('catalog.shheben.show', compact('material', 'leftmenu'));
    }

    public function peskogrunt($slug)
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }

        $material = Post::where('slug', '=', $slug)->firstOrFail();
        return view('catalog.peskogrunt.show', compact('material', 'leftmenu'));
    }

    public function graviy($slug)
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }

        $material = Post::where('slug', '=', $slug)->firstOrFail();
        return view('catalog.gravij.show', compact('material', 'leftmenu'));
    }
}
