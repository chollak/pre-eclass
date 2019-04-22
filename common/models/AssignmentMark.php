<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "assignment_mark".
 *
 * @property int $id
 * @property int $assignment_id
 * @property int $student_id
 * @property int $mark
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Assignment $assignment
 * @property Student $student
 */
class AssignmentMark extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assignment_mark';
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
            [['assignment_id', 'student_id', 'mark'], 'required'],
            [['assignment_id', 'student_id', 'mark', 'created_at', 'updated_at'], 'integer'],
            [['assignment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Assignment::className(), 'targetAttribute' => ['assignment_id' => 'id']],
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
            'assignment_id' => Yii::t('common', 'Assignment ID'),
            'student_id' => Yii::t('common', 'Student ID'),
            'mark' => Yii::t('common', 'Mark'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignment()
    {
        return $this->hasOne(Assignment::className(), ['id' => 'assignment_id']);
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
     * @return \common\models\query\AssignmentMarkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AssignmentMarkQuery(get_called_class());
    }
}
