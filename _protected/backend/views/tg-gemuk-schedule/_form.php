<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TgGemukSchedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tg-gemuk-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'day_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tg_gemuk_tioman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tioman_tg_gemuk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
