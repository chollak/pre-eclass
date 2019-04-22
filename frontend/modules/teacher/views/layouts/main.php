<?php 

use yii\helpers\Html;
use lo\modules\noty\Wrapper;
use frontend\assets\CustomAppAsset;

CustomAppAsset::register($this);

$app = Yii::$app;

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?php echo $app->language ? $app->language : 'en' ?>">

<head>
    <meta charset="<?php echo $app->charset ? $app->charset : 'utf8' ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags(); ?>
    <title><?php echo Html::encode($this->title); ?></title>
    <?php $this->head(); ?>
</head>

<?php $this->beginBody(); ?>

<body id="body">
    <?php echo $this->render('partials/header'); ?>
    <main>
        <!-- MAIN CONTAINER -->
        <div class="container">
            <?= Wrapper::widget() ?>
            <div class="row">
                <!-- LEFT BLOCK WITH LOGIN FORM -->
                <?php echo $this->render('partials/sidebar') ?>
                <!-- LEFT BLOCK WITH LOGIN FORM END -->

                <!-- CONTENT -->
                <div class="col-md-9 content">
                    <?php echo $content; ?>
                <!-- CONTENT END -->
                </div>
            </div>
        </div>
        <!-- MAIN CONTAINER END -->
        <br>
    </main>

    <?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage(); ?>