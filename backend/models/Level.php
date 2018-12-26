<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "level".
 *
 * @property string $id
 * @property string $name
 * @property integer $sort
 * @property integer $score
 * @property string $createTime
 * @property string $modifyTime
 */
class Level extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'score'], 'integer'],
            [['createTime', 'modifyTime'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '等级名称'),
            'sort' => Yii::t('app', '排序'),
            'score' => Yii::t('app', '升级分值'),
            'createTime' => Yii::t('app', '创建时间'),
            'modifyTime' => Yii::t('app', '修改时间'),
        ];
    }
}
