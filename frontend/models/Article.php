<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property string $full
 * @property string $time
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc', 'full'], 'string'],
            [['time'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }
    public static function getarticle($id){
        $leng=Yii::$app->language;
         $res=self::find()->where(['id' => $id])->all();

        foreach($res as $val){
          preg_match('|\['.$leng.'.*?\](.*)\[/'.$leng.'\]|sei', $val->full, $arr);
            return  $arr;
        }
       //return $res;
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'desc' => 'Desc',
            'full' => 'Full',
            'time' => 'Time',
        ];
    }
}
