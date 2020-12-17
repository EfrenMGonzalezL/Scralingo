<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\AvatarAccesories;

Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@authenticate');

Route::get('/', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/home', function () {
    if (Auth::user()->user instanceof \App\Student)
        return view('student.student_home');
    else
        return view('teacher.teacher_home');
})->middleware('auth');

Route::get('/profile', function () {
    return view('student.profile');
})->middleware('auth');

Route::get('/avatar', function () {
    $categories = \App\Category::all();
    $avatar_accesories = \App\AvatarAccesories::select('accesory_id')->where('avatar_id', Auth::user()->user->avatar->id)->get();
    return view('student.avatar', ['categories' => $categories, 'accesories' => $avatar_accesories->toArray()]);
})->middleware('auth');

Route::post('/avatar/get_avatar', function () {
    $avatar = Auth::user()->user->avatar;
    return response()->json(array('sucess' => true, 'avatar' => $avatar));
})->middleware('auth');

Route::post('/avatar/save_avatar', function () {
    $avatar = Auth::user()->user->avatar;
    $avatar->face_url = request()->face;
    $avatar->hair_url = request()->hair;
    $avatar->hands_url = request()->hands;
    $avatar->shirt_url = request()->shirts;
    $avatar->sleeves_url = request()->sleeves;
    $avatar->pants_url = request()->pants;
    $avatar->shoes_url = request()->shoes;
    $avatar->skin_url = request()->skin;

    $success = false;
    $msg = 'Tu avatar no pudo ser guardado. 😔';

    if ($avatar->save()) {
        $success = true;
        $msg = 'Tu avatar se ha guardado correctamente. 😄';
    }

    return response()->json(array('success' => $success, 'message' => $msg));
})->middleware('auth');

Route::post('/purchase/{id}', function ($id) {
    $accesory = \App\Accesory::find($id);
    $success = false;
    $msg = 'La compra no pudo ser realizada. Prueba más tarde. 😔';

    if (Auth::user()->user->current_level >= $accesory->required_level && Auth::user()->user->money >= $accesory->price) {
        $new_accesory = new AvatarAccesories;

        $new_accesory->accesory_id = $accesory->id;
        $new_accesory->avatar_id = Auth::user()->user->avatar->id;
        Auth::user()->user->money -= $accesory->price;

        if ($new_accesory->save() && Auth::user()->user->save()) {
            $success = true;
            $msg = 'La compra se ha efectuado correctamente. 😄';
        }
    } else if(Auth::user()->user->current_level < $accesory->required_level) {
        $msg = 'No tienes el nivel requerido para comprar este artículo.😔';
    } else if(Auth::user()->user->money < $accesory->price) {
        $msg = 'No tienes suficiente dinero para comprar este artículo. Puedes conseguir dinero completando tareas. No le quites el ojo a los avisos de tu profesor.';
    }

    return response()->json(array('success' => $success, 'message' => $msg, 'money' => Auth::user()->user->money));
});

Route::get('/classes', function () {
    return redirect('/home');
})->middleware('auth');

Route::get('/classes/{class_id}/', 'SchoolClassController@show')->middleware('auth');
Route::post('/classes/{class_id}/students', 'SchoolClassController@showStudents')->middleware('auth');
Route::post('/classes/{class_id}/homeworks', 'SchoolClassController@showHomeworks')->middleware('auth');
