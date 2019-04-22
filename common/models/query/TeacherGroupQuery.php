<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\TeacherGroup]].
 *
 * @see \common\models\TeacherGroup
 */
class TeacherGroupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\TeacherGroup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\TeacherGroup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
