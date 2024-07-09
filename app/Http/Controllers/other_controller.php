<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\experience as Experience;
use App\Models\Project;
use App\Models\Skills;
use App\Models\cv as CV;

class other_controller extends Controller
{
    public function experiences()
    {

        $exp = Experience::orderBy('created_at', 'desc')->get();
        return view('experiences', ['experiences' => $exp]);
    }


    public function projects()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        $skills = Skills::all();
        return view('projects', ['projects' => $projects, 'skills' => $skills]);
    }


    public function cv()
    {
        $cv = CV::first();
        return redirect($cv->link);
    }
}
