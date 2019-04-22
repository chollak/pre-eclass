<?php 

namespace frontend\modules\teacher\widgets;

use Yii;
use yii\base\Widget;

class GroupsWidget extends Widget{

    public function run()
    {
        $user = Yii::$app->getUser();
        
        $identity = $user->getIdentity();

        $teacher_groups = $identity->teacher->teacherGroups;

        return $this->render('groups',[
            'teacher_groups' => $teacher_groups
        ]);
    }

}

?>