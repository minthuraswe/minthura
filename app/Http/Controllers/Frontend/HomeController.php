<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\Project;

class HomeController extends Controller
{
    public function index(){
        $project = Project::paginate(12);
        return view('frontend.index', compact('project'));
    }
}
