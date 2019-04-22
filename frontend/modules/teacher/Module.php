<?php 

namespace frontend\modules\teacher;

use yii\base\Module as BaseModule;

class Module extends BaseModule{

    public $controllerPath = 'frontend/modules/teacher/controllers';

    public $layoutPath = 'frontend/modules/teacher/views/layouts';

    public function init(){
        parent::init();
        $this->layout = 'main';
    }

}

?>