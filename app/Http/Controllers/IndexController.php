<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * List projects
     */
    public function listProjects() 
    {
        $projects = Project::all();

        return view('projects')->with('projects', $projects);
    }

    /**
     * Display project on subdomain
     */
    public function publishProject($url)
    {
        $project = Project::where('url', $url)->firstOrFail();

        return view('single')->with('project', $project);
    }


}