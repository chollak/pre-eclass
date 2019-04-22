<?php 

use yii\bootstrap\Html;

?>
<header>
    <nav class="navbar navbar-custom bg-blue">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo Html::a(Html::img('@frontendImg/e-class.svg'), Yii::$app->homeUrl, [
                    'class' => 'navbar-brand'
                    ]); ?>
                <?php echo Html::a(Html::img('@frontendImg/mode-white.svg'), '#', [
                    'class' => 'navbar-brand',
                    'onclick' => 'changeTheme()'
                ]); ?>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><?php echo Html::a(Yii::t('frontend', 'eClass'), ['/group/default/index']); ?></li>
                    <li><?php echo Html::a(Yii::t('frontend', 'Teacher'), ['/teacher/default/index']) ?></li>
                </ul>
                <?php if(!Yii::$app->getUser()->getIsGuest()): ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><?php echo Html::a(Yii::t('frontend', 'Logout'), ['/account/sign-in/logout'], [
                            'data-method' => 'post',
                        ]); ?></li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>