<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Marine Monkees Backend';
?>
<div class="site-index">

    <div class="jumbotron">
        <img src="<?=Yii::getAlias('@appRoot')?>/themes/brailie/style/images/logo-light@2x.png">
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h3>[ Mersing Ferry Schedule ]</h3>
                <p>Create new entries or update existing entries.</p>
                <p><a class="btn btn-primary btn-block" href="<?=Url::toRoute(['mersing-schedule/index'])?>">Manage</a></p>
            </div>
            <div class="col-lg-4">
                <h3>[ Tg Gemuk Schedule ]</h3>
                <p>Create new entries or update existing entries.</p>
                <p><a class="btn btn-info btn-block" href="<?=Url::toRoute(['tg-gemuk-schedule/index'])?>">Manage</a></p>
            </div>
            <div class="col-lg-4">
                <h3>[ Promotions ]</h3>
                <p>Coming soon.</p>
                <p><a class="btn btn-info btn-danger btn-block disabled" href="<?=Url::toRoute(['promotion/index'])?>">Manage</a></p>
            </div>
        </div>

    </div>
</div>
