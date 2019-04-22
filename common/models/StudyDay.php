<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "study_day".
 *
 * @property int $id
 * @property string $day
 * @property int $number
 *
 * @property Timetable $timetable
 */
class StudyDay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'study_day';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day', 'number'], 'required'],
            [['number'], 'integer'],
            [['day'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'day' => Yii::t('common', 'Day'),
            'number' => Yii::t('common', 'Number'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimetable()
    {
        return $this->hasOne(Timetable::className(), ['study_day_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\StudyDayQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\StudyDayQuery(get_called_class());
    }
}
