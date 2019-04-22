<?php 

namespace frontend\modules\group\controllers;

use yii\web\Controller;
use yii\filters\AjaxFilter;
use common\models\Assignment;

class AjaxController extends Controller{

    public function behaviors()
    {
        return [
            [
                'class' => AjaxFilter::className(),
            ]
        ];
    }

    public function actionAssignment($assignment_id){
        if($assignment = Assignment::findOne($assignment_id)){
            return $this->renderAjax('assignment_content',[
                'model' => $assignment,
            ]);
        }
    }

}

?>