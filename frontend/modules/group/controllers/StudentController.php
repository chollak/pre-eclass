<?php 

namespace frontend\modules\group\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use common\models\Student;

class StudentController extends Controller{
    
    public function actionIndex(){
        $group_id = \Yii::$app->getUser()->getIdentity()->group->id;
        $dataProvider = new ActiveDataProvider([
            'query' => Student::find()->where(['group_id' => $group_id]),
        ]);

        return $this->render('index',[
            'dataProvider' => $dataProvider,
        ]);

    }
}

?>