<?php

namespace Controller;

use Model\Discipline;
use Model\Post;
use Model\Subdivision;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Site
{
    //метод для работы с одной таблицей из бд mvc , по большому счёту теперь не нужно
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get(); //подключаем таблицу чтобы можно было выводить данные на странице
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    //реализация редиректа при успешной регистрации
    public function signup(Request $request): string
    {
        //если регистрация удалась,то перенаправить на другую страницу
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/');
        }
        //во всех остальных случаях просто отобразить страницу с регистрационной формой
        return new View('site.signup');
    }

    //метод логин для входа в систему
    public function login(Request $request): string
    {

        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.guest_templates.login');
        }
        if ($request->method === 'POST'){

            //Если удалось аутентифицировать пользователя, то редирект
            if (Auth::attempt($request->all())) {
                //если заходит под админом, то перекинет на доступные админу страницу
                if(Auth::user()->role === 'admin'){
                    app()->route->redirect('/admindisciplineview');
                }else{
                    app()->route->redirect('/disciplines');
                }
            }
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.guest_templates.login', ['message' => 'Неверная пара логин|пароль']);


    }

    //метод для выхода пользователя из системы
    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/');
    }

    //гость

    //Функция для вывода главной страницы
    public function main(): string{
        return new View('site.guest_templates.main_page');
    }

    //Функция для вывода страницы регистрации
//    public function myLogin(Request $request): string{
//        //Если просто обращение к странице, то отобразим форму
//        if($request -> method === 'GET'){
//            return new View('site.guest_template.login');
//        }
//        //Если аутентификация прошла удачно, то перенаправим на просмотр страницы с дисциплинами
//        if(Auth::attempt($request->all())){
//            app() -> route -> redirect('/disciplines');
//        }
//        //Если ауьентификация не удалась, то перенаправим обратно на страницу входа в систему и отправим сообще о неправильных введёных данных
//        return new View('site.guest_templates.login',['message' => 'Неправильные пара логин|пароль']);
//    }

    //функции просмотра страниц, достпуных обычным пользователям
    //Страница с дисциплинами
    public function disciplines(): string{
        $disciplines = Discipline::all();
        return (new View)->render('site.user_templates.disciplines_view',['disciplines' => $disciplines]);
    }

    //Функция просмотра страницы с подразделениями
    public function subdivisions(): string{
        $subdivisions = Subdivision::all();
        return (new View)->render('site.user_templates.subdivisions_view', ['subdivisions' => $subdivisions]);
    }

    //admin

    //Функция для просмотра страницы с формой создания пользователя
    public function addUser(Request $request): string{
        return new View('site.admin_templates.new_user');
    }
    //Функция для просмотра страницы с формой добавления нового сотрудника
    public function addEmployee(Request $request): string{
        return new View('site.admin_templates.new_employee');
    }
    //Функция для просмотра страницы с формой добавления нового подразделения
    public function addSubdivision(Request $request): string{
        return new View('site.admin_templates.new_subdivision');
    }
    //Функция для просмотра страницы с формой добавления новой дисциплины
    public function addDiscipline(Request $request): string{
        return new View('site.admin_templates.new_discipline');
    }

    //Функция просмотра страницы со всеми данными по дисциплинам(для админа)
    public function adminDisciplineView(): string{
        $disciplinesAdmin = Discipline::all();
        return (new View)->render('site.admin_templates.disciplines_view(admin)', ['disciplines' => $disciplinesAdmin]);
    }

    //Функция просмотра страницы со всеми данными по подразделениям(для админа)
    public function adminSubdivisionView(): string {
        return new View('site.admin_templates.subdivision_view(admin)');
    }
}

