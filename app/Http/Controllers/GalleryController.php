<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class GalleryController extends Controller
{
    public function galereya()
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }
        $galleries = Gallery::all();
        foreach ($galleries as $gallery) {
            $gallery = $gallery;
            $images = json_decode($gallery->img);
        }
        return view('pages.gallery', compact('gallery', 'leftmenu', 'images'));
    }
}
