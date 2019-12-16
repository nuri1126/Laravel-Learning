<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index(){
    	//PSR-4 : an autoloading specification. specific namespace
    	$projects = Project::all();
    	//return view('projects.index', ['projects' => $projects]);
    	return view('projects.index', compact('projects'));
	}

}
