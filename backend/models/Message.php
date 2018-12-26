<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property string $id
 * @property string $uid
 * @property string $despatcher
 * @property integer $type
 * @property string $content
内容
content
 * @property string $createTime
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'despatcher', 'type'], 'integer'],
            [['content
内容
content'], 'string'],
            [['createTime'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'uid' => Yii::t('app', '消息所属人id'),
            'despatcher' => Yii::t('app', '发送人id'),
            'type' => Yii::t('app', '消息类型'),
            'content
内容
content' => Yii::t('app', '消息类容'),
            'createTime' => Yii::t('app', 'Create Time'),
        ];
    }
}
