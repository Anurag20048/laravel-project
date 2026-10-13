@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center mt-5">Student Management</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-area">
        <form method="POST" action="{{ route('student.save') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="stu_name">Student Name *</label>
                    <input id="stu_name" type="text" class="form-control" name="stu_name"
                           value="{{ old('stu_name') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="stu_dob">Student Date of Birth *</label>
                    <input id="stu_dob" type="date" class="form-control" name="stu_dob"
                           value="{{ old('stu_dob') }}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="stu_address">Address</label>
                    <input id="stu_address" type="text" class="form-control" name="stu_address"
                           value="{{ old('stu_address') }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="stu_status">Status</label>
                    <select id="stu_status" name="stu_status" class="form-control" required>
                        <option value="active" @selected(old('stu_status', 'active') === 'active')>Active</option>
                        <option value="inactive" @selected(old('stu_status') === 'inactive')>Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Register Student</button>
        </form>
    </div>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->stu_name }}</td>
                        <td>{{ $student->stu_dob }}</td>
                        <td>{{ $student->stu_address }}</td>
                        <td>{{ ucfirst($student->stu_status) }}</td>
                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-outline-primary"
                               href="{{ route('student.edit', $student->id) }}">Edit</a>
                            <form class="d-inline" method="POST"
                                  action="{{ route('student.delete', $student->id) }}"
                                  onsubmit="return confirm('Delete this student?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                            </form>
                            <a class="btn btn-sm btn-outline-secondary"
                               href="{{ route('student.manage', $student->id) }}">Manage</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center">No students registered yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('css')
<style>
.form-area { padding: 20px; margin-top: 20px; background-color: #eaf4ff; border-radius: 8px; }
</style>
@endpush
