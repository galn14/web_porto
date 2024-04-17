@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('project.index') }}" class="btn btn-secondary">
        << kembali</a>
    </div>
    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="title"
                id="title"
                aria-describedby="titleHelpId"
                placeholder="Enter project title"
                value="{{ old('title') }}"
            />
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="company"
                id="company"
                placeholder="Enter company name"
                value="{{ old('company') }}"
            />
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Start Date</div>
                <div class="col-auto">
                    <input 
                        type="date" 
                        class="form-control form-control-sm" 
                        name="start_date" 
                        value="{{ old('start_date') }}"
                    />
                </div>
                <div class="col-auto">End Date</div>
                <div class="col-auto">
                    <input 
                        type="date" 
                        class="form-control form-control-sm" 
                        name="end_date" 
                        value="{{ old('end_date') }}"
                    />
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                class="form-control form-control-sm" 
                name="description" 
                rows="5"
            >{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input 
                type="file" 
                class="form-control form-control-sm" 
                name="image" 
                id="image"
            >
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection
