<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            "name" => "RJay"
        ];

        return $this->render('home', $params);
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body); die;
    }
}