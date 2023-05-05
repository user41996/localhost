<?php

namespace Middlewares;

use Exception;
use Src\Auth\Auth;
use Src\Request;

class AdminMiddleware
{
    /**
     * @throws Exception
     */
    public function handle(Request $request, string $roles): void{
        //проверка на то, есть ли у пользователя роль админа для доступа ко всем страницам
        if (!Auth::user() -> hasRole(explode('|', $roles))){
            throw new Exception('Forbidden for you)');
        }
    }

}