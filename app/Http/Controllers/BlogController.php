<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\InstagramSection;

class BlogController extends Controller
{
    public function index()
    {
        $posts =
            BlogPost::query()
                ->published()
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->paginate(6);


        $instagramSections =
            InstagramSection::query()
                ->where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->orderBy('id', 'asc')
                ->get();


        return view(
            'Home.blog',
            compact(
                'posts',
                'instagramSections'
            )
        );
    }


    public function show(string $slug)
    {
        $post =
            BlogPost::query()
                ->published()
                ->where('slug', $slug)
                ->firstOrFail();


        $instagramSections =
            InstagramSection::query()
                ->where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->orderBy('id', 'asc')
                ->get();


        return view(
            'Home.blogshow',
            compact(
                'post',
                'instagramSections'
            )
        );
    }
}