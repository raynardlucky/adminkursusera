<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Program */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-form box box-primary">
    <?php $form = ActiveForm::begin(['layout' => 'horizontal']);?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'degree')->dropDownList(
            ['prompt' => '---- Select degree ----','Bachelor' => 'Bachelor', 'Master' => 'Master']
        ) ?>

        <?= $form->field($model, 'duration')->dropDownList(
            ['prompt' => '---- Select duration ----','3 years' => '3 years', '4 years' => '4 years']
        ) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
