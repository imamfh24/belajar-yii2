<p>Hello, </p> <?php echo $nama ?>

<?php

use yii\helpers\Url;
use yii\helpers\Html;

echo Url::base();

echo Html::a('Contact',['site/contact']);