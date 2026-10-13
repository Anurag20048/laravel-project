@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Manage Records: {{ $student->stu_name }}</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <div class="card card-body my-4">
        <h5>Add Record</h5>
        <form method="POST" action="{{ route('student.saveRecord') }}">
            @csrf
            <input type="hidden" name="stu_id" value="{{ $student->id }}">
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input id="title" class="form-control" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description *</label>
                <input id="description" class="form-control" name="description" value="{{ old('description') }}" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date *</label>
                <input id="date" type="date" class="form-control" name="date" value="{{ old('date', date('Y-m-d')) }}" required>
            </div>
            <button class="btn btn-primary" type="submit">Add Record</button>
            <a class="btn btn-secondary" href="{{ route('student') }}">Back to Students</a>
        </form>
    </div>

    <h5>Saved Records</h5>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead><tr><th>#</th><th>Title</th><th>Description</th><th>Date</th></tr></thead>
            <tbody>
            @forelse($stuRecords as $record)
                <tr><td>{{ $record->id }}</td><td>{{ $record->title }}</td><td>{{ $record->description }}</td><td>{{ $record->date }}</td></tr>
            @empty
                <tr><td colspan="4" class="text-center">No records added yet.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
