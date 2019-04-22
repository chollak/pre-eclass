<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "study_period".
 *
 * @property int $id
 * @property string $start_time
 * @property string $end_time
 *
 * @property Timetable $timetable
 */
class StudyPeriod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'study_period';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start_time', 'end_time'], 'required'],
            [['start_time', 'end_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'start_time' => Yii::t('common', 'Start Time'),
            'end_time' => Yii::t('common', 'End Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimetable()
    {
        return $this->hasOne(Timetable::className(), ['study_period_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\StudyPeriodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\StudyPeriodQuery(get_called_class());
    }

    public function getStudyPeriodFullTime(){
        return $this->start_time . ' - ' . $this->end_time;
    }

}
