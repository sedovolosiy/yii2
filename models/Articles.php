<?php

namespace app\models;

use yii\db\ActiveRecord;
use \yii\db\Query;


class Articles extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%articles_table}}';
    }

    public function getArticles()
    {
        return (new Query())
            ->from(Articles::tableName())
            ->all();
    }
}