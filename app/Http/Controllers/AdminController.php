<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Admin.dashboard');
    }


    public function showFormAddBook()
    {
        //
        return view('Admin.add');
    }



    public function showFormEditBook()
    {
        //
        return view('Admin.edit');
    }


}
