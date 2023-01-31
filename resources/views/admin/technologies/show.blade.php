@extends('layouts.admin')

@section('page-title')
    {{ $technology->name }}
@endsection

@section('content')
    <h1>Technology name: <span class="text-decoration-underline">{{ $technology->name }}</span></h1>

    {{-- Nav links --}}
    <div class="mt-5">
        <a href="{{ route('admin.technologies.index') }}" class="btn btn-secondary">Technology List</a>
        <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-success">Edit this technology</a>
    </div>
@endsection