<?php

namespace app\controllers;

use app\models\Articles;
use Yii;
use yii\web\Controller;
use app\models\Categories;
use app\models\Menu;



class TestController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

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
        return $this->render('article', [
//            'id'=>$id
            'article' => Articles::find()
                ->where(['id' => $id])
                ->one()
        ]);
    }

    public function getAllMenu()
    {
        return Menu::find()->all();
    }
    public function getAllCategories()
    {
        return Categories::find()->all();
    }
    public function getAllArticles()
    {
        return Articles::find()->all();
    }

}