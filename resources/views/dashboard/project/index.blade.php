@extends('dashboard.layout')

@section('konten')
    <p class="card-title">project</p>
    <div class="pb-3"><a href="{{ route('projects.create') }}" class="btn btn-primary">+ Add Project</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th class="col-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->company }}</td>
                        <td>{{ $project->start_date->format('d-m-Y') }}</td>
                        <td>{{ $project->end_date ? $project->end_date->format('d-m-Y') : 'N/A' }}</td>
                        // other columns
                        <!-- other table data -->
                        <td>
                            <a href="{{ route('projects.edit', $project->id) }}" 
                               class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Are you sure?')"
                                  action="{{ route('projects.destroy', $project->id) }}" 
                                  class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name='submit'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @php $i++; @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
