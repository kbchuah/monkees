<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MersingSchedule */

$this->title = Yii::t('app', 'Create Mersing Schedule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mersing Schedules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mersing-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
