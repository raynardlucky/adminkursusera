<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "instructor".
 *
 * @property int $inid
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property string $dob
 * @property string $affiliation
 * @property string $bio
 */
class Instructor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instructor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'gender', 'dob', 'affiliation', 'bio'], 'required'],
            [['name', 'email', 'password', 'gender', 'dob', 'affiliation', 'bio'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inid' => 'Inid',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'affiliation' => 'Affiliation',
            'bio' => 'Bio',
        ];
    }
}
