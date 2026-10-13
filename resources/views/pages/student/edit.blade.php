@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Edit Student</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('student.update', $student->id) }}" class="card card-body">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="stu_name" class="form-label">Student Name *</label>
            <input id="stu_name" type="text" class="form-control" name="stu_name"
                   value="{{ old('stu_name', $student->stu_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="stu_dob" class="form-label">Date of Birth *</label>
            <input id="stu_dob" type="date" class="form-control" name="stu_dob"
                   value="{{ old('stu_dob', $student->stu_dob) }}" required>
        </div>

        <div class="mb-3">
            <label for="stu_address" class="form-label">Address</label>
            <input id="stu_address" type="text" class="form-control" name="stu_address"
                   value="{{ old('stu_address', $student->stu_address) }}">
        </div>

        <div class="mb-3">
            <label for="stu_status" class="form-label">Status *</label>
            <select id="stu_status" name="stu_status" class="form-control" required>
                <option value="active" @selected(old('stu_status', $student->stu_status) === 'active')>Active</option>
                <option value="inactive" @selected(old('stu_status', $student->stu_status) === 'inactive')>Inactive</option>
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="{{ route('student') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
