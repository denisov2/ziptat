<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CanvasLabels;

/**
 * CanvasLabelsSearch represents the model behind the search form about `common\models\CanvasLabels`.
 */
class CanvasLabelsSearch extends CanvasLabels
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'canvas_id', 'label_id', 'top', 'left', 'width', 'height', 'rotate'], 'integer'],
            [['color'], 'safe'],
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
        $query = CanvasLabels::find();

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
            'canvas_id' => $this->canvas_id,
            'label_id' => $this->label_id,
            'top' => $this->top,
            'left' => $this->left,
            'width' => $this->width,
            'height' => $this->height,
            'rotate' => $this->rotate,
        ]);

        $query->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
