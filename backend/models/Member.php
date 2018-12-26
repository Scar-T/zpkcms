<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $nickname
 * @property integer $role
 * @property integer $sex
 * @property string $birthday
 * @property string $status
 * @property string $avatarTm
 * @property string $avatar
 * @property string $email
 * @property string $createTime
 * @property string $modifyTime
 * @property string $last_visit
 * @property integer $userType
 * @property string $authkey
 * @property string $accessToken
 * @property string $remainder
 * @property integer $integral
 * @property integer $rank
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'sex', 'userType', 'integral', 'rank'], 'integer'],
            [['birthday', 'createTime', 'modifyTime', 'last_visit'], 'safe'],
            [['remainder'], 'number'],
            [['username', 'password', 'nickname', 'status', 'avatarTm', 'avatar', 'email', 'authkey', 'accessToken'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', '帐号'),
            'password' => Yii::t('app', '密码'),
            'nickname' => Yii::t('app', '昵称'),
            'role' => Yii::t('app', '角色名称'),
            'sex' => Yii::t('app', '性别'),
            'birthday' => Yii::t('app', '生日'),
            'status' => Yii::t('app', '状态'),
            'avatarTm' => Yii::t('app', '头像缩略图'),
            'avatar' => Yii::t('app', '头像'),
            'email' => Yii::t('app', '邮箱'),
            'createTime' => Yii::t('app', '创建时间'),
            'modifyTime' => Yii::t('app', '修改时间'),
            'last_visit' => Yii::t('app', '最后登录时间'),
            'userType' => Yii::t('app', '用户类别'),
            'authkey' => Yii::t('app', '授权'),
            'accessToken' => Yii::t('app', 'Access Token'),
            'remainder' => Yii::t('app', '余额'),
            'integral' => Yii::t('app', '积分'),
            'rank' => Yii::t('app', '等级分数'),
        ];
    }
}
