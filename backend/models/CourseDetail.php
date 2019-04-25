<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "course_detail".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $course_id
 * @property int $instructor_id
 * @property string $link_video
 *
 * @property Course $course
 * @property Instructor $instructor
 */
class CourseDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'course_id', 'instructor_id', 'link_video'], 'required'],
            [['course_id', 'instructor_id'], 'integer'],
            [['title', 'description', 'link_video'], 'string', 'max' => 255],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'course_id']],
            [['instructor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Instructor::className(), 'targetAttribute' => ['instructor_id' => 'inid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'course_id' => 'Course ID',
            'instructor_id' => 'Instructor ID',
            'link_video' => 'Link Video',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstructor()
    {
        return $this->hasOne(Instructor::className(), ['inid' => 'instructor_id']);
    }
}
