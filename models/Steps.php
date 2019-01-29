<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "steps".
 *
 * @property int $id
 * @property int $step
 * @property string $step_name
 *
 * @property People[] $peoples
 */
class Steps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'steps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['step'], 'required'],
            [['step'], 'integer'],
            [['step_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'step' => 'Step',
            'step_name' => 'Step Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeoples()
    {
        return $this->hasMany(People::className(), ['step_id' => 'id']);
    }
}
