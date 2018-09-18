<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class TestController extends Controller
{
    public function index(Category $category, Request $request, Topic $topic)
    {
    	var_dump($topic->user->avatar);
    }
}
