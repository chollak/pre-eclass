<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use vova07\fileapi\behaviors\UploadBehavior;

/**
 * This is the model class for table "assignment".
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $group_id
 * @property string $title
 * @property string $due_start_date
 * @property string $due_end_date
 * @property string $details
 * @property string $file_url
 * @property int $min_score
 * @property int $max_score
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Teacher $teacher
 * @property Group $group
 * @property AssignmentMark[] $assignmentMarks
 */
class Assignment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assignment';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
            [
                'class' => UploadBehavior::className(),
                'attributes' => [
                    'file_url' => [
                        'path' => '@storage/assignments',
                        'tempPath' => '@storage/temp',
                        'url' => '@storageUrl/assignments',
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'group_id', 'title', 'due_start_date', 'due_end_date', 'min_score', 'max_score'], 'required'],
            [['teacher_id', 'group_id', 'min_score', 'max_score', 'created_at', 'updated_at'], 'integer'],
            [['due_start_date', 'due_end_date'], 'safe'],
            [['details'], 'string'],
            [['title', 'file_url'], 'string', 'max' => 255],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'teacher_id' => Yii::t('common', 'Teacher ID'),
            'group_id' => Yii::t('common', 'Group ID'),
            'title' => Yii::t('common', 'Title'),
            'due_start_date' => Yii::t('common', 'Due Start Date'),
            'due_end_date' => Yii::t('common', 'Due End Date'),
            'details' => Yii::t('common', 'Details'),
            'file_url' => Yii::t('common', 'File Url'),
            'min_score' => Yii::t('common', 'Min Score'),
            'max_score' => Yii::t('common', 'Max Score'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
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
    public function getAssignmentMarks()
    {
        return $this->hasMany(AssignmentMark::className(), ['assignment_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AssignmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AssignmentQuery(get_called_class());
    }
}
