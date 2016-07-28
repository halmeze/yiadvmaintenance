<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Maintenance';
?>

<?php
$route1=  Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>"> ไปที่ Test1  </a>
<br>


<?php
$route2=  Yii::$app->urlManager->createUrl(['test/test2','name'=>'Halmeze','lname'=>'Hayi']);
?>
<a href="<?=$route2?>"> ไปที่ Test2  </a>
<br>

<?=
\yii\helpers\Html::a('ลิงค์แบบที่3',['test/test1']);
?>
<br>

<?=
Html::a('ลิงค์แบบที่4',['test/test1']);
?><br>

<?=
Url::to('ลิงค์แบบที่5',['site/index']);
?><br>