<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index');});
Route::get('/portal', function () { return view('portal');});
Route::get('/trabajos-chile', function () { return view('trabajos-chile');});
Route::get('/quienes-somos', function () { return view('quienes-somos');});
Route::get('/trabajo', function () { return view('trabajo');});
Route::get('/empresa', function () { return view('empresa');});

Route::get('/password', function () { return view('password');});
Route::get('/login', function () { return view('login');});
Route::get('/register', function () { return view('register');});
Route::get('/terminosCondiciones', function () { return view('terminosCondiciones');});

Route::get('/account/perfil', function () { return view('account/perfil');});
Route::get('/account/tests', function () { return view('account/tests');});
Route::get('/account/portafolio', function () { return view('account/portafolio');});
Route::get('/account/applications', function () { return view('account/applications');});
Route::get('/account/invitations', function () { return view('account/invitations');});
Route::get('/account/strengths', function () { return view('account/strengths');});
Route::get('/account/result', function () { return view('account/result');});
Route::get('/account/config', function () { return view('account/config');});
Route::get('/account/mails', function () { return view('account/mails');});

Route::get('/company/dashboard', function () { return view('company/dashboard');});
Route::get('/company/profile', function () { return view('company/profile');});
Route::get('/company/usuarios', function () { return view('company/usuarios');});
Route::get('/company/personalizacion', function () { return view('company/personalizacion');});

Route::get('/company/job/profesional', function () { return view('company/job/profesional');});
Route::get('/company/job/practica', function () { return view('company/job/practica');});
Route::get('/company/job/estudiante', function () { return view('company/job/estudiante');});
Route::get('/company/job/active', function () { return view('company/job/active');});
Route::get('/company/job/closed', function () { return view('company/job/closed');});
Route::get('/company/job/waiting', function () { return view('company/job/waiting');});
Route::get('/company/job/pending', function () { return view('company/job/pending');});
Route::get('/company/job/nuevo', function () { return view('company/job/nuevo');});

Route::get('/admin/cargo', function () { return view('admin/cargo');});
Route::get('/admin/information', function () { return view('admin/information');});
Route::get('/admin/postulante', function () { return view('admin/postulante');});
Route::get('/admin/dashboard', function () { return view('admin/dashboard');});
Route::get('/admin/proceso', function () { return view('admin/proceso');});