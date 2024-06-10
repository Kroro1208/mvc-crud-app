<?php

namespace app\controllers;

use app\models\viewsModel;

class viewsController extends viewsModel
{
    public function obtainViewsController($view)
    {
        if ($view != "") {
            $request = $this->obtainViewModel($view);
        } else {
            $request = 'login';
        }

        return $request;
    }
}
