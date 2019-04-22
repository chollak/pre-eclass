<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "attendance".
 *
 * @property int $id
 * @property int $group_id
 * @property int $student_id
 * @property string $date
 * @property string $status
 *
 * @property Group $group
 * @property Student $student
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attendance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'student_id', 'date', 'status'], 'required'],
            [['group_id', 'student_id'], 'integer'],
            [['date'], 'safe'],
            [['status'], 'string'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'group_id' => Yii::t('common', 'Group ID'),
            'student_id' => Yii::t('common', 'Student ID'),
            'date' => Yii::t('common', 'Date'),
            'status' => Yii::t('common', 'Status'),
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
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AttendanceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AttendanceQuery(get_called_class());
    }
}
