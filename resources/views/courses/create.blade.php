{{-- What layout is gonna use --}}
@extends('layouts.plantilla')

{{-- Just for one line --}}
@section('title', 'Create')

<h2>Add New Course</h2>

<form class="course-form" action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="title">Title</label>
    <input type="text" id="title" name="title">

    <label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

    <label for="language">Language</label>
    <input type="text" id="language" name="language">

    <label for="difficulty">Difficulty</label>
    <select name="difficulty" id="difficulty">
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
    </select>

    <label for="instructor">Instructor</label>
    <input type="text" id="instructor" name="instructor">

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="image">Image</label>
    <input type="file" id="image" name="image">

    <input type="submit" value="Add Course">
</form>

@push('styles')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@endpush