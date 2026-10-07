<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\InstagramSection;

class BlogController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Blog Listing Page
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $posts =
            BlogPost::query()
                ->published()
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->paginate(6);


        /*
        |--------------------------------------------------------------------------
        | Instagram Section
        |--------------------------------------------------------------------------
        */

        $instagramSections =
            InstagramSection::query()
                ->where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->orderBy('id', 'asc')
                ->get();


        /*
        |--------------------------------------------------------------------------
        | Blog Listing View
        |--------------------------------------------------------------------------
        |
        | File:
        | resources/views/Home/blog.blade.php
        |
        */

        return view(
            'Home.blog',
            compact(
                'posts',
                'instagramSections'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Single Blog Post Page
    |--------------------------------------------------------------------------
    */

    public function show(string $slug)
    {
        /*
        |--------------------------------------------------------------------------
        | Get Published Blog Post
        |--------------------------------------------------------------------------
        */

        $post =
            BlogPost::query()
                ->published()
                ->where('slug', $slug)
                ->firstOrFail();


        /*
        |--------------------------------------------------------------------------
        | Instagram Section
        |--------------------------------------------------------------------------
        */

        $instagramSections =
            InstagramSection::query()
                ->where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->orderBy('id', 'asc')
                ->get();


        /*
        |--------------------------------------------------------------------------
        | Single Blog Post View
        |--------------------------------------------------------------------------
        |
        | File:
        | resources/views/Home/blogpage.blade.php
        |
        */

        return view(
            'Home.blogpage',
            compact(
                'post',
                'instagramSections'
            )
        );
    }
}