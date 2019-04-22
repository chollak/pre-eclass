<?php 

use yii\bootstrap\Html;
use frontend\widgets\LoginWidget;
use frontend\modules\teacher\widgets\GroupsWidget;

?>
<div class="col-md-3">
    <div class="row">

        <div class="col-xs-12">
            <?php echo LoginWidget::widget([
                'visible' => Yii::$app->getUser()->getIsGuest(),
            ]) ?>
        </div>
        <div class="col-xs-12 sidebar-bottom">
            <?php echo GroupsWidget::widget(); ?>
        </div>
    </div>
</div>