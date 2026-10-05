@extends('layouts.app')

@section('title', 'Project Detail - ' . $project->title)

@section('content')
<div class="mb-4 ">
    <a href="{{ route('project.index') }}" class="btn btn-outline-secondary btn-sm">
        &larr; Kembali ke Daftar Project
    </a>
</div>
<div class="row justify-content-center g-4">

    <div class="col-md-7">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('images/' . $project->image) }}" alt="Project Image" class="img-fluid h-100 w-100"
                style="min-height: 300px; object-fit: cover;">
        </div>
    </div>
    <div class="col-md-5">
        <div class="card-body p-4">
            <div class="mb-2">
                <span
                    class="badge {{ $project->status == 'selesai' ? 'bg-success' : 'bg-danger' }} mb-2">{{ $project->status }}</span>
            </div>
            <div class="mb-2">
                <h2 class="card-title">{{ $project->title }}</h2>
                <p class="card-text">{{ $project->description }}</p>
            </div>

            <div class="mb-2">
                <small class="text-muted">Tech : {{ $project->teknologi }}</small>
            </div>
        </div>
    </div>
</div>
@endsection