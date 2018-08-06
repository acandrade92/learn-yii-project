<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Turma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="turma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeTurma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ativo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
