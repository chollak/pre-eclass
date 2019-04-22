<?php 

use yii\bootstrap\Html;
use frontend\widgets\LoginWidget;

?>
<div class="col-md-3">
    <div class="row">

        <div class="col-xs-12">
            <?php echo LoginWidget::widget([
                'visible' => Yii::$app->getUser()->getIsGuest(),
            ]) ?>
        </div>

    </div>
</div>