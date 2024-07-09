<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\experience as Experience;
use App\Models\Project;
use App\Models\Skills;
use App\Models\education as Education;
use App\Models\cv as CV;

class home_Controller extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('created_at', 'desc')->take(4)->get();
        $projects = Project::orderBy('created_at', 'desc')->take(8)->get();
        $skills = Skills::all();

        $language_skill = Skills::where('type', 'lang')->get();
        $library_skill = Skills::where('type', 'lib')->get();
        $framework_skill = Skills::where('type', 'fw')->get();
        $software_skill = Skills::where('type', 'soft')->get();
        $database_skill = Skills::where('type', 'db')->get();

        $education = Education::orderBy('id', 'desc')->get();

        $cv = CV::first();


        return view('home',
    
        [
            'experiences' => $experiences,
            'projects' => $projects,
            'skills' => $skills,
            'language_skill' => $language_skill,
            'library_skill' => $library_skill,
            'framework_skill' => $framework_skill,
            'software_skill' => $software_skill,
            'database_skill' => $database_skill,
            'education' => $education,
            'cv' => $cv
        ]);
    }
}
