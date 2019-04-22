<?php 

namespace frontend\modules\group;

use yii\base\Module as BaseModule;

class Module extends BaseModule{

    public $controllerPath = 'frontend/modules/group/controllers';

    public $layoutPath = 'frontend/modules/group/views/layouts';

    public function init(){
        parent::init();

        $this->layout = 'main';

    }

}
    

?>