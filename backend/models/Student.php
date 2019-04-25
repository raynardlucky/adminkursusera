<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $sid
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property string $dob
 * @property string $phone
 * @property string $address
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'gender', 'dob'], 'required'],
            [['dob'], 'safe'],
            [['name', 'email', 'password', 'gender', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sid' => 'Sid',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
}
