<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index()
    {
        $page['title'] = "Project & Portofolio";
        // END PAGE
        return view('part.resourcesDetail', compact('page'));
    }
}
