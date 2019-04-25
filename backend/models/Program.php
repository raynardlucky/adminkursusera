<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "program".
 *
 * @property int $id
 * @property string $name
 * @property string $degree
 * @property string $duration
 *
 * @property Provide[] $provides
 * @property Provider[] $providerNames
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'degree', 'duration'], 'required'],
            [['name', 'degree', 'duration'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'degree' => 'Degree',
            'duration' => 'Duration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvides()
    {
        return $this->hasMany(Provide::className(), ['program_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProviderNames()
    {
        return $this->hasMany(Provider::className(), ['name' => 'provider_name'])->viaTable('provide', ['program_id' => 'id']);
    }
}
