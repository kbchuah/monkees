<?php

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name). ' | ' .Yii::t('app', 'Diving');

$column_height = '400px';
?>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg1.jpg">
  <div class="container inner pt-150 pb-100 text-center">
    <h1 class="heading">Daily Diving Trip</h1>
    <!-- <h1 class="section-title mb-40 text-center">Daily Diving Trip</h2> -->
    <p>Typically we have 2-3 dives daily. There are different dives for you to choose from:</p>
    <div class="row">
      <div class="col-md-4">
        <div class="pricing panel box box-border" style="height:<?=$column_height?>">
          <div class="panel-heading">
            <h4 class="panel-title color-dark pb-0">Boat Dive</h4>
            <div class="price color-dark"> <span class="price-currency">MYR</span><span class="price-value">199</span> <span class="price-duration">2 dives</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tbody>
                <tr>
                  <td><strong>Daily</strong> from <strong>09:00 to 13:30</strong></td>
                </tr>
                <tr>
                  <td><small>[Dive guide, equipment & light snack included]</small></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Additional dive</strong> from <strong>15:30 to 17:00</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--/.panel-body -->
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
      <div class="col-md-4">
        <div class="pricing panel box box-border" style="height:<?=$column_height?>">
          <div class="panel-heading">
            <h4 class="panel-title color-dark pb-0">Shore Dive</h4>
            <div class="price color-dark"> <span class="price-currency">MYR</span><span class="price-value">55</span> <span class="price-duration">dive</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tbody>
                <tr>
                  <td><strong>Daily</strong> from <strong>09:00 to 17:00</strong></td>
                </tr>
                <tr>
                  <td><small>[Dive guide & equipment included]</small></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--/.panel-body -->
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
      <div class="col-md-4">
        <div class="pricing panel box box-border" style="height:<?=$column_height?>">
          <div class="panel-heading">
            <h4 class="panel-title color-dark pb-0">Night Dive</h4>
            <div class="price color-dark"> <span class="price-currency">MYR</span><span class="price-value">90</span> <span class="price-duration">dive</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tbody>
                <tr>
                  <td><strong>Daily</strong> from <strong>19:30 to 21:00</strong></td>
                </tr>
                <tr>
                  <td><small>[Dive guide, equipment & torch included]</small></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Night boat dive</strong> at <strong>MYR<big>130</big> / dive</strong> **</td>
                </tr>
                <tr>
                  <td>** <small>Please check with us, schedule subject to change depending on <strong>weather & availability</strong></small></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--/.panel-body -->
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->
