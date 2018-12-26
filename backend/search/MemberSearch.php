<?php

namespace app\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Member;

/**
 * MemberSearch represents the model behind the search form about `app\models\Member`.
 */
class MemberSearch extends Member
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role', 'sex', 'userType', 'integral', 'rank'], 'integer'],
            [['username', 'password', 'nickname', 'birthday', 'status', 'avatarTm', 'avatar', 'email', 'createTime', 'modifyTime', 'last_visit', 'authkey', 'accessToken'], 'safe'],
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
        $query = Member::find();

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
            'createTime' => $this->createTime,
            'modifyTime' => $this->modifyTime,
            'last_visit' => $this->last_visit,
            'userType' => $this->userType,
            'remainder' => $this->remainder,
            'integral' => $this->integral,
            'rank' => $this->rank,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'avatarTm', $this->avatarTm])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'authkey', $this->authkey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken]);

        return $dataProvider;
    }
}
