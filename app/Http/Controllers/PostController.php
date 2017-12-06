<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Post, User};

use App\Jobs\UserViewedPost;

class PostController extends Controller
{
    const POST_LIMIT = 5;

    public function index()
    {
    	$posts = Post::latest()->get();

    	return view('posts.index', compact('posts'));
    }

    public function show(Request $request, Post $post)
    {
    	if($request->user()) {
    		dispatch(new UserViewedPost($request->user(), $post));
    	}
    	
    	return view('posts.show', compact('post'));
    }

    public function recentlyViewedPosts(Request $request)
    {
        $posts = $request->user()->viewedPosts()
                                ->orderBy('pivot_updated_at', 'desc')
                                ->take(self::POST_LIMIT)
                                ->get();

        return view('posts.recent', [
            'posts' => $posts,
            'postsLimit' => self::POST_LIMIT
        ]);
    }
}
