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
        $project = Project::all();
        return view('dashboard.project.index', compact('project'));
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
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'  // Validate each image
    ]);

    $imageNames = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $imageFile) {
            $imageExtension = $imageFile->extension();
            $imageName = date('ymdhis') . uniqid() . ".$imageExtension";  // Generating a unique file name
            $imageFile->move(public_path('fotoproject'), $imageName);  // Move each file to project-specific directory
            $imageNames[] = $imageName;
        }
    }

    $project = Project::create([
        'title' => $request->title,
        'company' => $request->company,
        'type' => $this->_type,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'description' => $request->description,
        'images' => json_encode($imageNames)  // Store images as a JSON encoded array
    ]);

    return redirect()->route('project.index')->with('success', 'Project added successfully');
}


    public function edit(string $id)
    {
        $project = Project::where('id', $id)->where('type', $this->_type)->first();
        return view('dashboard.project.edit')->with('project', $project);
    }

    public function update(Request $request, string $id)
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
        return redirect()->route('project.index')->with('error', 'Project not found.');
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        $oldImage = $project->image;
        if ($oldImage && File::exists(public_path('fotoproject/' . $oldImage))) {
            File::delete(public_path('fotoproject/' . $oldImage));
        }

        $imageFile = $request->file('image');
        $imageExtension = $imageFile->extension();
        $imageName = date('ymdhis') . ".$imageExtension"; // Generating unique file name
        $imageFile->move(public_path('fotoproject'), $imageName); // Move file to project-specific directory
        $project->image = $imageName;  // Update the image path to new image
    }

    // Update the project's fields
    $project->update([
        'title' => $request->input('title'),
        'company' => $request->input('company'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date', null), // Handle nullable end_date
        'description' => $request->input('description')
    ]);

    return redirect()->route('project.index')->with('success', 'Project updated successfully');
}

    public function destroy(string $id)
    {
        $project = Project::where('id', $id)->where('type', $this->_type)->first();
        if ($project) {
            if ($project->image) {
                File::delete(public_path('fotoproject') . "/" . $project->image);
            }
            $project->delete();
        }
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }
}
