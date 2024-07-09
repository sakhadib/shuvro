<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\experience as Experience;
use App\Models\Project;
use App\Models\Skills;

class home_Controller extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('created_at', 'desc')->take(4)->get();
        $projects = Project::orderBy('created_at', 'desc')->take(8)->get();
        $skills = Skills::all();


        return view('home',
    
        [
            'experiences' => $experiences,
            'projects' => $projects,
            'skills' => $skills
        ]);
    }
}
