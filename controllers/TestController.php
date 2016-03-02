<?php

namespace app\controllers;

use app\models\Articles;
use Yii;
use yii\web\Controller;
use app\models\Categories;
use app\models\Menu;

class TestController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'categories' => Categories::find()->all(),
            'articles' => Articles::getArticles(),
            'menus' => Menu::find()->all()
        ]);
    }

    public function actionGetArticle($id)
    {
        return $this->render('acticle', [
            'article' => Articles::find()->where(['id' => $id])->one()
        ]);
    }

    public function getAll()
    {
        return Menu::find()->all();
    }

}