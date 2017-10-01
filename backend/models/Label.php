<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Label as LabelModel;

/**
 * Label represents the model behind the search form about `common\models\Label`.
 */
class Label extends LabelModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'subcategory_id', 'active', 'status', 'likes', 'created_at', 'updated_at'], 'integer'],
            [['name_en', 'name_ru', 'slug', 'description_en', 'description_ru', 'image_original'], 'safe'],
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
        $query = LabelModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'subcategory_id' => $this->subcategory_id,
            'active' => $this->active,
            'status' => $this->status,
            'likes' => $this->likes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'description_ru', $this->description_ru])
            ->andFilterWhere(['like', 'image_original', $this->image_original]);

        return $dataProvider;
    }
}
