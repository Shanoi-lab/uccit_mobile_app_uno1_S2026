@extends('layouts.app')

@section('title', 'IT Courses')
@section('page-title', 'Courses')

@section('content')
<div class="page-intro">
    <p>Explore courses offered by the Department of Information Technology.</p>
</div>

<div class="courses-list">
    @foreach($courses as $course)
    <details class="course-card">
        <summary class="course-card__summary">
            <div class="course-card__header">
                <span class="course-badge">{{ $course->code }}</span>
                <div class="course-card__meta">
                    <h2 class="course-card__title">{{ $course->name }}</h2>
                    <span class="course-credits">{{ $course->credits }} credits</span>
                </div>
            </div>
            <span class="course-card__chevron">›</span>
        </summary>

        <div class="course-card__body">
            <div class="course-detail">
                <span class="course-detail__label">Prerequisites</span>
                <span class="course-detail__value">
                    {{ $course->prerequisites ?: 'None' }}
                </span>
            </div>
            <div class="course-detail">
                <span class="course-detail__label">Description</span>
                <p class="course-detail__desc">{{ $course->description }}</p>
            </div>
        </div>
    </details>
    @endforeach
</div>
@endsection
