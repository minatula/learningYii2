<?php

use yii\web\Application;

define('YII_DEBUG', true);

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/yii2.php';
$yii = new Application($config);
$yii->run();