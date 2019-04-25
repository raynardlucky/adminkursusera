<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $course_id
 * @property string $name
 * @property string $program
 *
 * @property CourseDetail[] $courseDetails
 * @property Kelas[] $kelas
 * @property Teaching[] $teachings
 * @property Instructor[] $instructors
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
            [['name', 'program'], 'required'],
            [['name', 'program'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseDetails()
    {
        return $this->hasMany(CourseDetail::className(), ['course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasMany(Kelas::className(), ['course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachings()
    {
        return $this->hasMany(Teaching::className(), ['course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstructors()
    {
        return $this->hasMany(Instructor::className(), ['inid' => 'instructor_id'])->viaTable('teaching', ['course_id' => 'course_id']);
    }
}
