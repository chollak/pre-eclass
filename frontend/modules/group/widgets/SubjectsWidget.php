<?php 

namespace frontend\modules\group\widgets;

use Yii;
use yii\base\Widget;

class SubjectsWidget extends Widget{

    /**
     * @inheritDoc
     *
     * @return string
     */
    public function run()
    {
        $user = Yii::$app->getUser();

        $identity = $user->getIdentity();

        $subjects_relation = $identity->group;

        if($subjects_relation){
            return $this->render('subjects',[
                'subjects_relation' => $subjects_relation,
            ]);
        }else{
            return $this->render('empty');
        }

    }

}

?>