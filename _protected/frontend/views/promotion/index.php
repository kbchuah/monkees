<?php

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name). ' | ' .Yii::t('app', 'Promotion');

$column_height = '520px';
?>

<?php $bg_img1 = Yii::getAlias('@web').'/themes/brailie/style/images/art/monkees-bg2.jpg' ?>
<div class="fixed-bg-mobile" style='background-image: url("<?= $bg_img1 ?>")'></div>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?= $bg_img1 ?>">
  <div class="container inner pt-150 pb-100 text-center">
    <?= $this->render('//layouts/_2020_promotion', [
        'mini' => 'no'
    ]); ?>
    <div class="space50"></div>
    <p><button class="btn btn-full-rounded" data-toggle="modal" data-target="#contact-us">Click here for enquiries</button></p>

  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="container inner">
    <!-- <h2 class="section-title mb-40 text-center">Why scuba dive?</h2> -->
    <h2 class="section-title mb-40 text-center">Terms and Conditions:</h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <ul class="icon-list list-ice">
          <li><i class="fa fa-angle-right"></i>Rates are exclusive of accommodation, all meals, all transfers and marine park & conservation fee.</li>
          <li><i class="fa fa-angle-right"></i>Rates are valid for the year 2020 only.</li>
          <li><i class="fa fa-angle-right"></i>Rates are non negotiable.</li>
          <li><i class="fa fa-angle-right"></i>A non refundable deposit of RM500 to be paid upon signing up.</li>
          <li><i class="fa fa-angle-right"></i>Participants are to accept or abide to all terms and conditions and performance requirements of individual courses as laid out by PADI.</li>
          <li><i class="fa fa-angle-right"></i>e-learning lite pack consist of e-manual but with the option of selecting paper manual.</li>
          <li><i class="fa fa-angle-right"></i>Duration of Open Water Diver course is 4d3n, Advanced OW Diver course is 3d2n.</li>
          <li><i class="fa fa-angle-right"></i>** an extra day is needed.</li>
        </ul>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->
