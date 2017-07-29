<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Search Result';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h2><?= Html::encode($this->title) ?></h2>
    <p>
        <?php $form = ActiveForm::begin([
            'action' => 'site/search-result',
            'id' => 'search--form',
            'options' => ['class' => 'form-horizontal','style' => 'width:280px']
        ]);
$items=[
    '0' => 'Quality 1080p',
    '1' => 'Quality < 1080p',
    '2'=>'Quality > 1080p'
];

         foreach($model as $index => $movie){
//            echo $form->field($movie, "[$index]value");
            echo $movie .' ' . Html::dropDownList('cat', 'null', $items).'<br><br>';
        }?>
        <?php ActiveForm::end(); ?>
    </p>
</div>
