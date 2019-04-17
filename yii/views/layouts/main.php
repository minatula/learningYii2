<?php $this->beginPage();

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<!doctype html>
<html lang="en">
<head>
    <?php $this->head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $this->beginBody(); ?>
<?php
NavBar::begin([
    'brandLabel' => 'Yii2',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default navbar-fixed-top'
    ]
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Join', 'url' => ['/site/join']],
        ['label' => 'Login', 'url' => ['/site/login']]
    ]
]);
NavBar::end();
?>

<div class="container" style="margin-top: 50px;">
    <?= $content ?>
</div>


<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
