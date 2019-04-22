<?php 

namespace frontend\modules\teacher\controllers;

use yii\web\Controller;
use common\models\Group;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use common\models\Student;
use common\models\Assignment;
use vova07\fileapi\actions\UploadAction;

class GroupController extends Controller{

    public function actions()
    {
        return [
            'fileapi-upload' => [
                'class ' => UploadAction::className(),
                'path' => '@storage/temp',
            ]
        ];
    }

    public function actionView($id){

        $group = Group::find()->where(['id' => $id])->all();

        if(empty($group)){
            throw new NotFoundHttpException();
        }

        $studentsDataProvider = new ActiveDataProvider([
            'query' => Student::find()->where(['group_id' => $id]),
        ]);

        $assignmentsDataProvider = new ActiveDataProvider([
            'query' => Assignment::find()->where(['teacher_id' => \Yii::$app->getUser()->getIdentity()->teacher->id, 'group_id' => $id])
        ]);

        $assignment = new Assignment();
        $assignment->group_id = $id;
        $assignment->teacher_id = \Yii::$app->getUser()->getIdentity()->teacher->id;

        if($assignment->load(\Yii::$app->getRequest()->post()) && $assignment->save()){
            \Yii::$app->getSession()->setFlash('success', 'Assignment has been created');
            return $this->refresh();
        }else{
            return $this->render('view',[
                'studentsDataProvider' => $studentsDataProvider,
                'assignmentsDataProvider' => $assignmentsDataProvider,
                'assignmentModel' => $assignment,
            ]);
        }

    }

}

?>