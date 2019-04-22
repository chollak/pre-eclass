<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "timetable".
 *
 * @property int $id
 * @property int $room_id
 * @property int $group_id
 * @property int $study_day_id
 * @property int $study_period_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Group $group
 * @property Auditorium $room
 * @property StudyDay $studyDay
 * @property StudyPeriod $studyPeriod
 */
class Timetable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timetable';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'group_id', 'study_day_id', 'study_period_id'], 'required'],
            [['room_id', 'group_id', 'study_day_id', 'study_period_id', 'created_at', 'updated_at'], 'integer'],
            [['group_id'], 'unique'],
            [['study_day_id'], 'unique'],
            [['study_period_id'], 'unique'],
            [['room_id'], 'unique'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Auditorium::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['study_day_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyDay::className(), 'targetAttribute' => ['study_day_id' => 'id']],
            [['study_period_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyPeriod::className(), 'targetAttribute' => ['study_period_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'room_id' => Yii::t('common', 'Room ID'),
            'group_id' => Yii::t('common', 'Group ID'),
            'study_day_id' => Yii::t('common', 'Study Day ID'),
            'study_period_id' => Yii::t('common', 'Study Period ID'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Auditorium::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyDay()
    {
        return $this->hasOne(StudyDay::className(), ['id' => 'study_day_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyPeriod()
    {
        return $this->hasOne(StudyPeriod::className(), ['id' => 'study_period_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TimetableQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TimetableQuery(get_called_class());
    }
}
