<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "provider".
 *
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $description
 *
 * @property Provide[] $provides
 */
class Provider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'email', 'description'], 'required'],
            [['name', 'address', 'email', 'description'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 8],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvides()
    {
        return $this->hasMany(Provide::className(), ['provider_name' => 'name']);
    }
}
