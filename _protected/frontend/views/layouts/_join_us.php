<?php
use yii\helpers\Url;
?>

  <div class="wrapper light-wrapper">
    <div class="container inner">
      <h2 class="section-title mb-40 text-center">Join Us, Be A Monkee</h2>
      <div class="tiles">
        <div class="items row">
          <div class="item col-md-4">
            <a href="<?=Url::toRoute(['learn/'])?>">
              <figure class="overlay overlay4"><span><span class="bg"></span><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-learn3.jpg" alt=""></span>
                <figcaption class="d-flex">
                  <div class="align-self-end mx-auto">
                    <h4 class="mb-0">Learn with us</h4>
                  </div>
                </figcaption>
              </figure>
            </a>
          </div>
          <!--/.item -->
          <div class="item col-md-4">
            <a href="<?=Url::toRoute(['dive/'])?>">
              <figure class="overlay overlay4"><span><span class="bg"></span><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-dive.jpg" alt=""></span>
                <figcaption class="d-flex">
                  <div class="align-self-end mx-auto">
                    <h4 class="mb-0">Dive with us</h4>
                  </div>
                </figcaption>
              </figure>
            </a>
          </div>
          <!--/.item -->
          <div class="item col-md-4">
            <a href="<?=Url::toRoute(['tioman/'])?>">
              <figure class="overlay overlay4"><span><span class="bg"></span><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-home.jpg" alt=""></span>
                <figcaption class="d-flex">
                  <div class="align-self-end mx-auto">
                    <h4 class="mb-0">Visit us</h4>
                  </div>
                </figcaption>
              </figure>
            </a>
          </div>
          <!--/.item -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.tiles -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.wrapper -->
