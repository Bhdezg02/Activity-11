@extends('layouts.plantilla')

@section('content')

    <h2> Course Details</h2>
    <div class="course-details">
        <h3>{{ $course->title }}</h3>
        <p><strong>Description: </strong>{{ $course->description }}</p>
        <p><strong>Language: </strong>{{ $course->language }}</p>
        <p><strong>Difficulty: </strong>{{ $course->difficulty }}</p>
        <p><strong>Instructor: </strong>{{ $course->instructor }}</p>
        <p><strong>Email: </strong>{{ $course->email }}</p>
    </div>

@endsection