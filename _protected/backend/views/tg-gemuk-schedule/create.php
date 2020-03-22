<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TgGemukSchedule */

$this->title = Yii::t('app', 'Create Tg Gemuk Schedule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tg Gemuk Schedules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tg-gemuk-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
