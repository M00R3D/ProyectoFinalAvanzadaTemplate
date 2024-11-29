<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 

Route::get('/', function () {
    return view('welcome');
});

Route::post('/views/homepage', function (Request $request) {
    $email = 'job@mail.com';
    $password = '666';
    $email2 = 'isaias@mail.com';
    $password2 = '12345';
    if ($request->email === $email && $request->password === $password) {
        return redirect('/homepage');
    } else if ($request->email === $email2 && $request->password === $password2) {
        return redirect('/homepage');
    }
    return redirect('/')->with('error', 'Credenciales incorrectas');
});

Route::get('/homepage', function () {
    return view('homepage'); 
});


