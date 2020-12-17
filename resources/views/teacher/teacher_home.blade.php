@extends('layouts.teacher_layout')

@section('title')
    Inicio
@endsection

@section('content')
    <div class="content">
        <h3 class="h3 text text-secondary">Tus clases</h3>

        <div class="cards-container col-4">
            @foreach (Auth::user()->user->classes as $class)
            <div class="card cursor" data-color="{{ $class->class_color }}" data-href="/classes/{{ $class->id }}">
                <div class="card-header">{{ $class->class_name }}</div>
                <div class="card-container"></div>
            </div>
            @endforeach
        </div>
    </div>
@endsection