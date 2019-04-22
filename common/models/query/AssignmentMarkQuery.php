<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\AssignmentMark]].
 *
 * @see \common\models\AssignmentMark
 */
class AssignmentMarkQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\AssignmentMark[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\AssignmentMark|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
