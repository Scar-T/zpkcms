<?php

namespace app\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role', 'sex', 'status', 'userType'], 'integer'],
            [['username', 'password', 'birthday', 'avatarTm', 'avatar', 'email', 'createTime', 'modifyTime', 'last_visit', 'authkey', 'accessToken'], 'safe'],
            [['remainder'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'role' => $this->role,
            'sex' => $this->sex,
            'birthday' => $this->birthday,
            'status' => $this->status,
            'createTime' => $this->createTime,
            'modifyTime' => $this->modifyTime,
            'last_visit' => $this->last_visit,
            'userType' => $this->userType,
            'remainder' => $this->remainder,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'avatarTm', $this->avatarTm])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'authkey', $this->authkey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken]);

        return $dataProvider;
    }
}
