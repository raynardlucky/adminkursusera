<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Instructor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instructor-form box box-primary">
    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'gender')->dropDownList(
            ['prompt' => '---- Select ----','Male' => 'Male', 'Female' => 'Female']
        ) ?>

        <?= $form->field($model, 'dob')->widget(\yii\jui\DatePicker::class, [
        //'language' => 'ru',
        //'dateFormat' => 'yyyy-MM-dd',
        ]) ?>

        <?= $form->field($model, 'affiliation')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'bio')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
