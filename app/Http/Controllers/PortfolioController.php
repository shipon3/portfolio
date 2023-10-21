<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = File::json(storage_path('data/about.json'));
        // dd($data);
        return view('welcome', compact('data'));
    }

    public function experience()
    {
        $data = File::json(storage_path('data/experience.json'));
        // dd($data);
        return view('experience', compact('data'));
    }

    public function project()
    {
        $data = File::json(storage_path('data/project.json'));
        $project_data = $data['projects'];
        return view('project', compact('project_data'));
    }

    public function projectDetails(int $id)
    {
        $data = File::json(storage_path('data/project.json'));
        $project = collect($data['projects'])->firstWhere('id', $id);
        if (!$project) {
            return response()->json(['error' => 'Project not found'], 404);
        }
        return view('project-details', compact('project'));
    }
}
