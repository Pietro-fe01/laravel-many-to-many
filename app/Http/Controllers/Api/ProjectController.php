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

    public function show($slug) { 
        try {
            return Project::where('slug', $slug)->with('type', 'technologies')->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $te) {
            return response([
                'error' => '404 | Project not found'
            ], 404);
        }
    }
}
