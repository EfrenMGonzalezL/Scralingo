<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    //
    public function show($id)
    {
        $class_homeworks = \App\SchoolClass::find(1)->homeworks()->get();

        return view('teacher.teacher_class_homeworks', ['homeworks' => $class_homeworks]);
    }
}
