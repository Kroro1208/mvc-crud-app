<?php

namespace app\models;

class viewsModel
{ // 特定のビューに対するファイルパスを取得するためのメソッドを含むモデルクラスを定義
    protected function obtainViewModel($view)
    {
        $allowedList = ["dashboard"];
        if (in_array($view, $allowedList)) {
            if (is_file('./mvc-app/app/views/content/' . $view . '-view.php')) {
                $content = './mvc-app/app/views/content' . $view . 'view.php';
            } else {
                $content = '404';
            }
        } elseif ($view == 'login' || $view == 'index') {
            $content = 'login';
        } else {
            $content = '404';
        }
        return $content;
    }
}
