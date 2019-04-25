<?php

namespace backend\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "record".
 *
 * @property int $record_ID
 * @property int $runner_ID
 * @property string $record_Awal
 * @property string $record_Akhir
 *
 * @property Registration $runner
 */
class Record extends \yii\db\ActiveRecord
{
    public $Lap;
    public $Nama;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['runner_ID', 'record_Awal', 'record_Akhir'], 'required'],
            [['runner_ID', 'Lap'], 'integer'],
            [['record_Awal', 'record_Akhir'], 'string', 'max' => 20],
            [['Nama'], 'string', 'max' => 100],
            [['runner_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['runner_ID' => 'no_Peserta']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'record_ID' => 'Record ID',
            'runner_ID' => 'Runner ID',
            'record_Awal' => 'Record Awal',
            'record_Akhir' => 'Record Akhir',
            'Lap' => 'Lap',
            'Nama' => 'Nama'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRunner()
    {
        return $this->hasOne(Registration::className(), ['no_Peserta' => 'runner_ID']);
    }

    public static function getTotalInstructor()
    {
        $total = Record::find()
            ->select(['inid', 'instruction.inid', 'COUNT(*)'])
            ->all();
        return $total;
    }

    public static function getTotalLapMale()
    {
        $lapTotal = Record::find()
            ->leftJoin('registration', 'record.runner_ID=registration.no_peserta')
            ->select(['runner_ID', 'registration.nama AS Nama', 'COUNT(*) AS Lap'])
            ->where(['not', ['record_Akhir' => null]])
            ->andWhere(['=', 'Gender', 'MALE'])
            ->groupBy(['runner_ID'])
            ->orderBy(['Lap' => SORT_DESC])
            ->limit(10)
            ->all();
        return $lapTotal;
    }

    public static function getTotalLapFemale()
    {
        $lapTotal = Record::find()
            ->leftJoin('registration', 'record.runner_ID=registration.no_peserta')
            ->select(['runner_ID', 'registration.nama AS Nama', 'COUNT(*) AS Lap'])
            ->where(['not', ['record_Akhir' => null]])
            ->andWhere(['like', 'Gender', 'FEMALE'])
            ->groupBy(['runner_ID'])
            ->orderBy(['Lap' => SORT_DESC])
            ->limit(10)
            ->all();
        return $lapTotal;
    }

}
