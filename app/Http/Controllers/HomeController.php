<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoryModel;

class HomeController extends Controller
{
    //
    public function index(){
        $story = StoryModel::paginate();
        return view('welcome',compact('story'))->with('i',(request()->input('page',1)-1)*10);
    }

}
