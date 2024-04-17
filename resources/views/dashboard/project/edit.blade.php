@extends('dashboard.layout')

@section('konten')
<div class="container mt-4">
    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h3>Project Details</h3>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control form-control-sm" name="title" id="title" value="{{ old('title', $project->title) }}">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control form-control-sm" name="company" id="company" value="{{ old('company', $project->company) }}">
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control form-control-sm" name="start_date" id="start_date" value="{{ old('start_date', $project->start_date->toDateString()) }}">
                </div>
                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control form-control-sm" name="end_date" id="end_date" value="{{ old('end_date', $project->end_date ? $project->end_date->toDateString() : '') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control form-control-sm" name="description" id="description" rows="5">{{ old('description', $project->description) }}</textarea>
                </div>
            </div>
            <div class="col-md-5">
                <h3>Project Image</h3>
                @if($project->image)
                <img src="{{ url('fotoproject/' . $project->image) }}" style="max-width:900px; max-height:500px" alt="Current Project Image">
                @endif
                <div class="mb-3">
                    <label for="image" class="form-label">Change Image</label>
                    <input type="file" class="form-control form-control-sm" name="image" id="image">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</div>
@endsection
