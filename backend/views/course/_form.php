<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Course */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-form box box-primary">
    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    <?php $programs = ArrayHelper::map(\backend\models\Program::find()->orderBy('name')->all(), 'id', 'name') ?>
    <div class="box-body table-responsive">
        <div class="col-md-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'program')->dropDownList($programs, ['prompt' => '---- Select program ----'])->label('program') ?>

            <?= $form->field($model, 'rating')->textInput(['maxlength' => true]) ?>
        </div>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
