<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function news()
    {
        $posts = Post::paginate(10);
        $popularPosts = Post::orderBy('views', 'desc')->take(3)->get();
        $featuredPosts = Post::where('is_featured', 1)->take(3)->get();
        $recentPosts = Post::orderBy('date', 'desc')->take(4)->get();
        $categories = Category::all();

        return view('pages.lists', [
            'posts' => $posts,
            'popularPosts' => $popularPosts,
            'featuredPosts' => $featuredPosts,
            'recentPosts' => $recentPosts,
            'categories' => $categories
        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('pages.show', compact('post'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        $posts = $tag->posts()->paginate(2);

        return view('pages.list', ['posts'  =>  $posts]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = $category->posts()->paginate(2);

        return view('pages.list', ['posts'  =>  $posts]);
    }
}
