<?php 

namespace frontend\modules\teacher\controllers;

use yii\web\Controller;
use common\models\Group;
use yii\filters\AjaxFilter;
use common\models\Assignment;

class AjaxController extends Controller{

    public function actionSubject($teacher_id, $subject_id, $group_id){
        $group = Group::find()->where(['id' => $group_id])->one();
        if($group){
            return $this->renderAjax('subject',[
                'group' => $group,
                'students' => $group->students,
            ]);
        }
    }

    public function actionAssignment($assignment_id){
        if($assignment = Assignment::findOne($assignment_id)){
            return $this->renderAjax('assignment',[
                'model' => $assignment,
            ]);
        }
        
    }

}

?>