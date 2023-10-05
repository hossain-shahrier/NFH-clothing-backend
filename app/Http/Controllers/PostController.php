<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::all();

        return response()->json($posts);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json($post);
    }

    public function store(Request $request): JsonResponse
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->caption = $request->input('caption');
        $post->image_paths = $request->input('image_paths');
        $post->video_paths = $request->input('video_paths');
        $post->product_id = $request->input('product_id');
        $post->save();

        return response()->json($post);
    }

    public function update(Request $request, Post $post): JsonResponse
    {
        $post->title = $request->input('title');
        $post->caption = $request->input('caption');
        $post->image_paths = $request->input('image_paths');
        $post->video_paths = $request->input('video_paths');
        $post->product_id = $request->input('product_id');
        $post->save();

        return response()->json($post);
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json();
    }
}
