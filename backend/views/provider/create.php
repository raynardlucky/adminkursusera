<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Provider */

$this->title = 'Create Provider';
$this->params['breadcrumbs'][] = ['label' => 'Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provider-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
