<?php 

namespace frontend\modules\group\controllers;

use yii\web\Controller;
use common\models\Student;
use common\models\Attendance;
use yii\data\ActiveDataProvider;
use frontend\modules\group\models\search\AttendanceSearch;

class AttendanceController extends Controller{
    
    public function actionIndex(){
        $group_id = \Yii::$app->getUser()->getIdentity()->group->id;

        $searchModel = new AttendanceSearch();
        $searchModel->group_id = $group_id;
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}

?>