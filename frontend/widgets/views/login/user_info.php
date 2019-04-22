<?php 

use yii\bootstrap\Html;

?>
<div class="sidebar-top p-10 bg-blue text-white">
    <div class="row">
        <div class="sidebar-top-left col-xs-4 p-10 flex column align-items-center">
            <?php echo Html::img('@frontendImg/avatar-white.svg',[
                'class' => 'img-responsive'
            ]) ?>
                </div>
                <div class="col-xs-8 sidebar-top-right">
                    <?php 
            
            echo Html::beginTag('p', [
                'class' => 'username text-right'
            ]);
            
            echo Yii::$app->getUser()->getIdentity()->username;

            echo Html::endTag('p');  

            ?>

        </div>
    </div>
</div>