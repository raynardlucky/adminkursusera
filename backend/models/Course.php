<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $course_id
 * @property string $name
 * @property string $program
 * @property string $rating
 *
 * @property Kelas[] $kelas
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'program', 'rating'], 'required'],
            [['name', 'program', 'rating'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'name' => 'Name',
            'program' => 'Program',
            'rating' => 'Rating',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasMany(Kelas::className(), ['course_id' => 'course_id']);
    }

    public function getProgramName()
    {
        return $this->hasOne(Program::className(), ['id' => 'program']);
//        return $this->program ? $this->program->name : 'name';
    }
}
