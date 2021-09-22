<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Kiss Roland'
        ];
        return Application::$app->router->renderView('home', $params);
    }
    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $var = $request->getBody();
        var_dump($var);

    }

}