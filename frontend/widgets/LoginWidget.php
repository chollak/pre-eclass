<?php 

namespace frontend\widgets;

use yii\base\Widget;
use common\models\LoginForm;

class LoginWidget extends Widget{
    
    /**
     * model
     *
     * @var LoginForm
     */
    private $_model;


    /**
     * visibility
     *
     * @var bool
     */
    public $visible = true;

    /**
     * Initializer for widget
     *
     * @return mixed
     */
    public function init(){
        parent::init();
        if($this->_model === null){
            $this->_model = new LoginForm();
        }
    }

    /**
     * Runs the widget
     *
     * @return string
     */
    public function run()
    {
        if($this->visible){
            return $this->render('login/form',[
                'model' => $this->_model,
            ]);
        }else{
            return $this->render('login/user_info');
        }
    }

}

?>