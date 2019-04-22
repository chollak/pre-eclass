<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auditorium".
 *
 * @property int $id
 * @property string $name
 * @property string $building
 *
 * @property Timetable $timetable
 */
class Auditorium extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auditorium';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'building'], 'required'],
            [['name', 'building'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'name' => Yii::t('common', 'Name'),
            'building' => Yii::t('common', 'Building'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimetable()
    {
        return $this->hasOne(Timetable::className(), ['room_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AuditoriumQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AuditoriumQuery(get_called_class());
    }
}
