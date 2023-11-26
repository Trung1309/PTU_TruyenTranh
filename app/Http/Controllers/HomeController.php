<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoryModel;
use App\Models\CategoryModel;

class HomeController extends Controller
{
    //
    public function index(){
        $category = CategoryModel::all();
        $story = StoryModel::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('category', 'story'));
    }

}
