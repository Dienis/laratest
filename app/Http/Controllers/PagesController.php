<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
    public function dostavka()
    {
        $pages = Page::all()->where('slug', 'dostavka');
        foreach ($pages as $page) {
            $page = $page;
        }
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }
        return view('pages.dostavka', compact('page', 'leftmenu'));
    }

    public function otzyvy()
    {
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }
        return view('pages.otzyvy', compact('leftmenu'));
    }

    public function katalog_materialov()
    {
        $pages = Page::all()->where('slug', 'katalog-materialov');
        foreach ($pages as $page) {
            $page = $page;
        }
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }
        return view('pages.katalog_materialov', compact('page', 'leftmenu'));
    }

    public function sotrudnichestvo()
    {
        $pages = Page::all()->where('slug', 'sotrudnichestvo');
        foreach ($pages as $page) {
            $page = $page;
        }
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }
        return view('pages.sotrudnichestvo', compact('page', 'leftmenu'));
    }

    public function kontaktyi()
    {
        $pages = Page::all()->where('slug', 'kontaktyi');
        foreach ($pages as $page) {
            $page = $page;
        }
        $categories = Category::all()->where('slug', 'katalog-materialov');
        foreach ($categories as $category) {
            $leftmenu = $category->posts->sortBy('created_at');
        }
        return view('pages.kontaktyi', compact('page', 'leftmenu'));
    }
}
