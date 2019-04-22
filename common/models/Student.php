<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $group_id
 * @property string $firstname
 * @property string $lastname
 * @property string $birthday
 * @property string $phone
 * @property string $secondary_phone
 * @property string $gender
 * @property int $district_id
 * @property string $address
 * @property int $created_at
 * @property int $updated_at
 *
 * @property AssignmentMark[] $assignmentMarks
 * @property Attendance[] $attendances
 * @property Group $group
 * @property District $district
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
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
            [['group_id', 'firstname', 'lastname', 'birthday', 'phone', 'gender', 'district_id', 'address'], 'required'],
            [['group_id', 'district_id', 'created_at', 'updated_at'], 'integer'],
            [['birthday'], 'safe'],
            [['gender'], 'string'],
            [['firstname', 'lastname', 'phone', 'secondary_phone', 'address'], 'string', 'max' => 255],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
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
            'firstname' => Yii::t('common', 'Firstname'),
            'lastname' => Yii::t('common', 'Lastname'),
            'birthday' => Yii::t('common', 'Birthday'),
            'phone' => Yii::t('common', 'Phone'),
            'secondary_phone' => Yii::t('common', 'Secondary Phone'),
            'gender' => Yii::t('common', 'Gender'),
            'district_id' => Yii::t('common', 'District ID'),
            'address' => Yii::t('common', 'Address'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignmentMarks()
    {
        return $this->hasMany(AssignmentMark::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['student_id' => 'id']);
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
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\StudentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\StudentQuery(get_called_class());
    }
}
