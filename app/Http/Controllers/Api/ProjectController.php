<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() { 
        // Return all projects and relative dipendences
        return Project::with('type', 'technologies')->get();
    }

    public function show($id) { 
        return Project::with('type', 'technologies')->find($id);
    }
}
