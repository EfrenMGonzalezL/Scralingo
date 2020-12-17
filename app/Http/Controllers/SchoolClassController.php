<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    //
    public function show($id)
    {
        $class = \App\SchoolClass::find($id);

        return view('teacher.teacher_class', ['class' => $class]);
    }

    public function showStudents($id)
    {
        $students = \App\SchoolClass::find($id)->students;

        $students_view = view('teacher.teacher_students', ['students' => $students])->render();
        return response()->json(array('success' => true, 'html' => $students_view));
    }

    public function showHomeworks($id)
    {
        $homeworks = \App\SchoolClass::find($id)->homeworks;

        $homeworks_view = view('teacher.teacher_homeworks', ['homeworks' => $homeworks])->render();
        return response()->json(array('success' => true, 'html' => $homeworks_view));
    }
}
