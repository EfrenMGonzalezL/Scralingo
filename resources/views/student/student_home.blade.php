@extends('layouts.student_layout')

@section('title')
    Inicio
@endsection

@section('content')
    <h1 class="text h1 text-secondary">Inicio</h1>

    <div class="homeworks-container">
        <h1 class="text text-secondary h3">Tus tareas</h1>
        <div class="cards-container col-4">
            @foreach (Auth::user()->user->classes as $student_class)
            <div class="card" style="background: {{ $student_class->class_color }}">
                <div class="card-header">
                    {{ $student_class->class_name }}
                </div>
                <div class="card-content">
                    <ul>
                        @foreach ($student_class->homeworks as $homework)
                            @if ($homework->homework_active == 0)
                                <li class="strike-through">{{ $homework->homework_name }}</li>
                            @else
                                <li>{{ $homework->homework_name }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection