<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showPostByAuthor(User $author)
    {
        return view('posts', [
            'title' => 'Posts By Author : ' . $author->name,
            'active' => 'posts',
            'posts' => $author->posts->load('category', 'author')
        ]);
    }
}
