<?php

namespace App\Http\Controllers;

use App\Services\JsonPlaceholderService;

class PostController extends Controller
{
    protected $jsonPlaceholderService;

    public function __construct(JsonPlaceholderService $jsonPlaceholderService)
    {
        $this->jsonPlaceholderService = $jsonPlaceholderService;
    }

    public function index()
    {
        $posts = $this->jsonPlaceholderService->getPosts();
        return view('posts.index', compact('posts'));
    }
}
