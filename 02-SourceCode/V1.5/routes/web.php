<?php
namespace app\routes;

use app\core\routing\Route;

class Web
{
    public static function Set()
    {
        if (isset(Route::$routes)) 
        {
            Route::$routes = null;
        }

        Route::Post('/', 
            [HomeController::class, 'Home'],
            'home', 'Home.php'
            )->Name('home');

        Route::Post('/contact', 
            [HomeController::class, 'Contact'],
            'home', 'contact.php'
            )->Name('contact');

        Route::Post('/users', 
            [UserController::class, 'Users'],
            'users', 'Users.php'
            )->Name('contact');

        Route::Get('/user', 
            [UserController::class, 'User'],
            'users', 'User.php'
            )->Name('user');

        Route::Post('/404', 
            [ErrorController::class, 'E404'],
            'errors', '404.php'
            )->Name('404');
    }
}
?>