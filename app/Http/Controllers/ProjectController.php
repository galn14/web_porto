<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    protected $_type;

    public function __construct()
    {
        $this->_type = 'project';
    }

    public function index()
    {
        $projects = Project::all(); // Fetch all projects
        return view('dashboard.project.index')->with('projects', @$projects);
    }

    public function create()
    {
        return view('dashboard.project.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'company' => 'required',
        'start_date' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'  // Corrected to single image handling
    ]);

    $imageName = null;
    if ($request->hasFile('image')) {
        $imageFile = $request->file('image');
        $imageExtension = $imageFile->extension();
        $imageName = date('ymdhis') . uniqid() . ".$imageExtension";  // Generating a unique file name
        $imageFile->move(public_path('fotoproject'), $imageName);  // Move the file to the project-specific directory
    }

    $project = Project::create([
        'title' => $request->title,
        'company' => $request->company,
        'type' => $this->_type,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'description' => $request->description,
        'image' => $imageName  // Storing a single image name
    ]);

    return redirect()->route('projects.index')->with('success', 'Project added successfully');
}


    public function edit($id)
    {
        $project = Project::find($id);
        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Project not found.');
        }
        return view('dashboard.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'start_date' => 'required|date',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $project = Project::find($id);
        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Project not found.');
        }

        if ($request->hasFile('image')) {
            $oldImage = $project->image;
            if ($oldImage && File::exists(public_path('fotoproject/' . $oldImage))) {
                File::delete(public_path('fotoproject/' . $oldImage));
            }

            $imageFile = $request->file('image');
            $imageExtension = $imageFile->extension();
            $imageName = date('ymdhis') . ".$imageExtension";
            $imageFile->move(public_path('fotoproject'), $imageName);
            $project->image = $imageName;
        }

        $project->update([
            'title' => $request->title,
            'company' => $request->company,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date, // Handle nullable end_date
            'description' => $request->description
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if ($project) {
            if ($project->image) {
                File::delete(public_path('fotoproject') . "/" . $project->image);
            }
            $project->delete();
        }
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }
}
