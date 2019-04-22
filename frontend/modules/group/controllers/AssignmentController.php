<?php 

namespace frontend\modules\group\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use common\models\Assignment;

class AssignmentController extends Controller{
    
    public function actionIndex(){
        $group_id = \Yii::$app->getUser()->getIdentity()->group->id;
        $dataProvider = new ActiveDataProvider([
            'query' => Assignment::find()->where(['group_id' => $group_id]),
        ]);

        return $this->render('index',[
            'dataProvider' => $dataProvider,
        ]);

    }
}

?>