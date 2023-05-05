<?php

use Src\Route;

//методичка
Route::add('GET', '/hello', [Controller\Site::class, 'hello']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);

//Функция для выхода из системы уже есть(доступны как пользователю, так и админу)
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

    //гость
//маршруты доступные гостю
Route::add('GET', '/',[Controller\Site::class, 'main']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
//Route::add(['GET','POST'],'/login',[Controller\Site::class, 'myLogin']);

    //user
//маршруты доступные для обычного пользователя системы
Route::add('GET','/disciplines',[Controller\Site::class, 'disciplines'])  -> middleware('auth');//маршрут для просмотра всех имеющихся дисцпиплин
Route::add('GET','/subdivisions',[Controller\Site::class,'subdivisions'])  -> middleware('auth');//маршрут для просмотра всех дисциплин обычным пользователем

    //admin
//маршруты доступные только админу
Route::add(['GET','POST'],'/adduser',[Controller\Site::class,'addUser'])  -> middleware('auth','admin:admin');//путь для добавления нового пользователя
Route::add(['GET','POST'],'/addemployee',[Controller\Site::class,'addEmployee'])  -> middleware('auth','admin:admin');//путь для добавления нового сотрудника
Route::add(['GET','POST'],'/addsubdivision',[Controller\Site::class,'addSubdivision'])  -> middleware('auth','admin:admin');//путь для добавления нового подразделения
Route::add(['GET','POST'],'/adddiscipline',[Controller\Site::class,'addDiscipline'])  -> middleware('auth','admin:admin');//путь для доваления новой дисциплины
Route::add('GET', '/admindisciplineview',[Controller\Site::class, 'adminDisciplineView'])  -> middleware('auth','admin:admin');
Route::add('GET', '/adminsubdivisionview',[Controller\Site::class, 'adminSubdivisionView'])  -> middleware('auth','admin:admin');
