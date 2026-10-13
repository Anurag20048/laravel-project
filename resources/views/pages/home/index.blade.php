@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container py-5 text-center">
    <div class="card card-body mx-auto p-5" style="max-width: 650px">
        <h1 class="mb-3">Student Management System</h1>
        <p class="text-muted">A simple Laravel CRUD project for OST practicals.</p>
        <a href="{{ route('student') }}" class="btn btn-primary">Open Student Management</a>
    </div>
</div>
@endsection
