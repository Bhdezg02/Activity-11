{{-- What layout is gonna use --}}
@extends('layouts.plantilla')

{{-- Just for one line --}}
@section('title', 'Index')

{{-- More than one line --}}
<div>

    <a class="add-course-button" href="{{ route('courses.create') }}">Add New Course</a>

    @foreach ($courses as $course)
    <ul>
        <li> {{ $course->title }} </li>
        <li> {{ $course->description }} </li>
        <li> {{ $course->language }} </li>
        <li> {{ $course->difficulty }} </li>
        <li> {{ $course->instructor }} </li>
        <li> {{ $course->email }} </li>
        <li>
            @if ($course->image_path)
                <img class="course-image" src="{{ asset('storage/' . $course->image_path) }}" alt="Course Image">
            @endif
        </li>
    </ul>
    @endforeach
</div>

@foreach ($courses as $course)
<tr>
    <td class="actions-cell">

        <a class="view-course-button" href="{{ route('courses.show', $course->id) }}">View Course</a>

        <a class="edit-course-button" href="{{ route('courses.edit', $course->id) }}">Edit Course</a>

        <form class="destroy-form" action="{{ route('courses.destroy', $course->id) }}">
            @method('DELETE')
            @csrf
            <button type="Submit" class="destroy-button">Delete</button>
        </form>
    </td>
</tr>
@endforeach

@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush