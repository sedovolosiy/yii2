<?php

namespace app\controllers;

use app\models\Articles;
use Yii;
use yii\web\Controller;
use app\models\Categories;

class TestController extends Controller
{
    public function actionIndex()
    {
        $test = new Categories();
        $categories = $test->getCategories();
        return $this->render('category', [
            'categories' => $categories,
        ]);
    }

    public  function actionArticles()
    {
        $arc = new Articles();
        $articles = $arc->getArticles();
        return $this->render('articles', [
            'articles' => $articles,
        ]);
    }
}