<?php
use yii\web\View;
use yii\grid\GridView;

use common\models\MersingSchedule;
use common\models\MersingScheduleSearch;
use common\models\TgGemukSchedule;
use common\models\TgGemukScheduleSearch;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name) . ' | ' . Yii::t('app', 'Tioman Island');

?>

<?php $bg_img1 = Yii::getAlias('@web').'/themes/brailie/style/images/art/monkees-tioman-aerial1.jpg' ?>
<div class="fixed-bg-mobile" style='background-image: url("<?= $bg_img1 ?>")'></div>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?= $bg_img1 ?>">
  <div class="container inner pt-150 pb-120">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-justify">
        <h1 class="heading">About Tioman Island</h1>
        <p>
          <span class="dropcap color-sky">T</span>ioman Island (Malay language: Pulau Tioman) is a small island in Pahang, Malaysia. It is located 32 kilometers (20 miles) off the east coast of the state,
          and is some 20 kilometers (12 miles) long and 12 kilometers (7.5 miles) wide.
        </p>
        <p>
          The densely forested island is sparsely inhabited, and is surrounded by numerous coral reefs,
          making it a popular scuba diving spot. There are also a lot of resorts and chalets around the island which has duty-free status. There are some 8 villages on the island
          and around 18 beaches, most of them still very pristine and only accessible by boat.
        </p>
        <p class="pull-right">
          [Source: wikipedia.org]
        </p>
        <!-- <div class="space10"></div> -->
      </div>
      <!--/column -->
    </div>
    <!--/row -->

    <hr>
    <!--/divider -->
    <div class="space30"></div>
    <div class="row">
      <div class="col-lg-12 text-justify">
        <h2 class="section-title title-color color-ice section-title-upper larger text-center">Getting to Tioman Island from Kuala Lumpur or Singapore</h2>
        <p>
          The major gateway to the island is Mersing, a coastal town west of Johor state. The common route for most visitors is to drive or take a bus ride up to Mersing then wait for the next available ferry out. Bluewater Express runs the main ferry service. There are generally two or three rides per day and the trip to Kampung Salang takes between two to three hours depending on the tide and other weather conditions.
        </p>
        <p>
          Alternatively there is a new ferry operator that operates from Tanjung Gemuk's pier.
        </p>
        <p>
          It's up to you which pier you would like to transit to Tioman island from. We have provided an easy to follow guide to find us in Kampung Salang (Tioman) via Mersing or Tanjung Gemuk.
        </p>
      </div>
      <!--/column -->
    </div>
    <!--/row -->

    <div class="space30"></div>

    <div class="tabs-wrapper bordered">
      <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#mersing">Mersing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#tg-gemuk">Tanjung Gemuk</a>
        </li>
      </ul>
      <!-- /.nav-tabs -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="mersing">
          <div class="row">
            <div class="col-md-12">
              <div class="space50"></div>
              <h2 class="section-title mb-40 text-center"><span class="icon icon-color color-default fs-38 mb-20"><i class="si-transport_cruise-ship"></i></span> Mersing</h2>
              <div class="row gutter-50 gutter-md-30 process-wrapper line text-center">
              <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
                <h5>KL/SG</h5>
                <p>
                  Depart from KL/SG. The common route for most visitors is to drive or take a bus ride up to Mersing. Plan your journey time according to your ferry departure time. It is also advisable to plan your departure a couple hours earlier during peak seasons due to high traffic along major highways.
                </p>
              </div>
              <!--/column -->
              <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
                <h5>Mersing Jetty</h5>
                <p>
                  Upon arrival, get your ferry tickets from the counters and wait for the next available ferry out. There is an option to book your <a href="http://www.easybook.com/" target="_blank" rel="noopener noreferrer">ferry tickets online</a> as well.
                </p>
                <p>
                  For more information and guide about ferry tickets & schedule, kindly visit the link below.
                </p>
                <div class="space30"></div>
                <a href="#" data-toggle="modal" data-target="#mersing-ferry" class="btn btn-full-rounded btn-sky">Guide/Schedule</a>
              </div>
              <!--/column -->
              <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
                <h5>Kg Salang</h5>
                <p> Salang is a popular beach destination at the north of Pulau Tioman, located along the west coast in a secluded bay. The last stop on the Mersing ferry route,
                    Salang offers a balanced holiday getaway, having a good range of tourist facilities, activities and conveniences, but without being overwhelmed by development.
                </p>
              </div>
              <!--/column -->
              <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
                <h5>Marine Monkees</h5>
                <p>When you arrive at Salang jetty in Tioman island, at the end of the jetty, turn left and then walk 150-200 meters/yards and look for the Marine Monkees Dive Center.
                   Usually there are one or two divers relaxing on the boardwalk or at night you’ll probably find a larger group enjoying a social evening sharing their dive experiences.
                 </p>
              </div>
              <!--/column -->
            </div>
              <!--/.row -->
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane fade" id="tg-gemuk">
          <div class="row">
            <div class="col-md-12">
              <div class="space50"></div>
              <h2 class="section-title mb-40 text-center"><span class="icon icon-color color-default fs-38 mb-20"><i class="si-transport_cruise-ship"></i></span> Tanjung Gemuk</h2>
              <div class="row gutter-50 gutter-md-30 process-wrapper line text-center">
                <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
                  <h5>KL/SG</h5>
                  <p>
                    Depart from KL/SG. The common route for most visitors is to drive or take a bus ride up to Mersing. Plan your journey time according to your ferry departure time. It is also advisable to plan your departure a couple hours earlier during peak seasons due to high traffic along major highways.
                  </p>
                </div>
                <!--/column -->
                <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
                  <h5>Tg Gemuk Pier</h5>
                  <p>
                    Alternate gateway to the island. The common route for most visitors is to drive or take a bus ride up to Tanjung Gemuk pier then wait for the next available ferry out. A new ferry operator, <a href="https://www.cataferry.com/" target="_blank" rel="noopener noreferrer">Cataferry</a> is available in Tanjung Gemuk.
                  </p>
                  <div class="space30"></div>
                  <a href="#" data-toggle="modal" data-target="#tg-gemuk-ferry" class="btn btn-full-rounded btn-sky">Guide/Schedule</a>
                </div>
                <!--/column -->
                <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
                  <h5>Kg Salang</h5>
                  <p> Salang is a popular beach destination at the north of Pulau Tioman, located along the west coast in a secluded bay. The last stop on the Mersing ferry route,
                      Salang offers a balanced holiday getaway, having a good range of tourist facilities, activities and conveniences, but without being overwhelmed by development.
                  </p>
                </div>
                <!--/column -->
                <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
                  <h5>Marine Monkees</h5>
                  <p>When you arrive at Salang jetty in Tioman island, at the end of the jetty, turn left and then walk 150-200 meters/yards and look for the Marine Monkees Dive Center.
                     Usually there are one or two divers relaxing on the boardwalk or at night you’ll probably find a larger group enjoying a social evening sharing their dive experiences.
                   </p>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.tabs-wrapper -->

  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="mersing-ferry" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <h2 class="text-uppercase text-center mb-20">Mersing Ferry Guide & Schedule</h2>
        <p class="lead larger"><span class="color-yellow">Where/how can I get my ferry ticket?</span></p>
        <p>Here is a step by step breakdown of how to come to Marine Monkees. This process applies to people coming via Mersing.</p>
        <ol class="ordered-list-number">
          <li>Go to Mersing Harbour Center</li>
          <li>Purchase tickets at ticketing counter No.W2 (group purchase is allowed)</li>
          <li>Register your name with local identity card or passport (one registration per one ticket) at the next counter No.W1 via window labeled ‘SALANG’ (group registration is allowed)</li>
          <li>Pay the Marine Park Conservation Fee at counter No.R23</li>
          <li>Walk over to boarding terminal across the street</li>
          <li>30 minutes before boarding time the boarding pass counter will open. Tell them you are going to KAMPUNG SALANG and present your ticket with the Marine Park Conservation receipt and collect the colour coded boarding pass</li>
          <li>Wait in line and for your boarding pass colour to be called, enter via ‘Gate A’ or ‘Gate B’ as announced. Surrender the boarding pass as you pass through the gate</li>
          <li>Board the specific ferry</li>
          <li>Disembark only when they call for ‘KAMPUNG SALANG’</li>
          <li>Welcome to Marine Monkees, Kampung Salang</li>
        </ol>
        <p>
          The journey from mainland to Kampung Salang takes around 2 ½ hours. Cost is MYR35.00 one way at the counter (best to book in advance – Bluewater Ferry +60 07 799 56 96). You could purchase your ticket via <a href="https://tiomanferryticket.com/" target="_blank">tiomanferryticket.com</a>
          <br>
          <span class="color-ice">※ Note: The Marine Park Conservation fee is payable at the counter. No arrangment for prepayment is possible.</span>
        </p>
        <p class="lead larger"><span class="color-yellow">Schedule: <?= date('F').'/'.date('F', strtotime('first day of +1 month')).' '.date('Y') ?></span></p>

        <?php // SMART WAY - TABLE (GRID) VIEW ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'summary' => false,
            'columns' => [
                [
                    'attribute' => 'day_date',
                    'headerOptions' => ['width' => '20%'],
                ],
                [
                    'attribute' => 'mersing_tioman',
                    'headerOptions' => ['width' => '40%'],
                ],
                [
                    'attribute' => 'tioman_mersing',
                    'headerOptions' => ['width' => '40%'],
                ],
            ],
        ]); ?>


        <?php /*
        // MANUAL WAY - AND U CAN RENDER HOWEVER U WANT
        $schedule_mersing_all = MersingSchedule::find()->all();
        ?>
        <table class="table table-hover table-dark" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th scope="col" width="25%">DAY/DATE</th>
              <th scope="col">MERSING – TIOMAN</th>
              <th scope="col">TIOMAN – MERSING</th>
            </tr>
          </thead>
          <tbody>
              <?php
              foreach($schedule_mersing_all as $item) { ?>
                  <tr>
                    <td scope="col"><?= $item->day_date ?></td>
                    <td scope="col"><?= $item->mersing_tioman ?></td>
                    <td scope="col"><?= $item->tioman_mersing ?></td>
                  </tr>
              <?php } ?>
          </tbody>
        </table>
        */ ?>


        <br>
        <p><span class="color-ice">※&nbsp;This schedule is provided by BLUEWATER EXPRESS/BISTARI GEMILANG TRAVEL SDN BHD, it is subject to tide level, sea and weather conditions for this month and based on meteorological reports.</span></p>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="tg-gemuk-ferry" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <h2 class="text-uppercase text-center mb-20">Tanjung Gemuk Ferry Guide & Schedule</h2>
        <p class="lead larger"><span class="color-yellow">Where/how can I get my ferry ticket?</span></p>
        <p>Here is a step by step breakdown of how to come to Marine Monkees. This process applies to people coming via Tg Gemuk.</p>
        <ol class="ordered-list-number">
          <li>Go to Tanjung Gemuk Harbour Center</li>
          <li>Purchase tickets at ticketing counter No. 3 (group purchase is allowed)</li>
          <li>Register your name with local identity card or passport (one registration per one ticket) at the same counter, and collect your boarding pass</li>
          <li>Pay the Marine Park Conservation Fee at counter before the departure lounge area</li>
          <li>Wait for your ferry at the departure lounge area</li>
          <li>Board the specific ferry. Enter and surrender the boarding pass as you pass through the gate</li>
          <li>Disembark only when they call for ‘KAMPUNG SALANG’</li>
          <li>Welcome to Marine Monkees, Kampung Salang</li>
        </ol>
        <p>
          The journey from mainland to Kampung Salang takes around 2 ½ hours.
        </p>
        <p class="lead larger"><span class="color-yellow">Schedule: <?= date('F').'/'.date('F', strtotime('first day of +1 month')).' '.date('Y') ?></span></p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider2,
            //'filterModel' => $searchModel,
            'summary' => false,
            'columns' => [
                [
                    'attribute' => 'day_date',
                    'headerOptions' => ['width' => '20%'],
                ],
                [
                    'attribute' => 'tg_gemuk_tioman',
                    'headerOptions' => ['width' => '40%'],
                ],
                [
                    'attribute' => 'tioman_tg_gemuk',
                    'headerOptions' => ['width' => '40%'],
                ],
            ],
        ]); ?>

        <p><span class="color-ice">※&nbsp;This schedule is provided by BLUEWATER EXPRESS/BISTARI GEMILANG TRAVEL SDN BHD, it is subject to tide level, sea and weather conditions for this month and based on meteorological reports.</span></p>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper -->

<div id="accommodation" class="wrapper light-wrapper">
  <div class="container inner">
    <h2 class="section-title mb-40 text-center">Accommodation</h2>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="tabs-wrapper bordered">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab2-1">Salang Indah Resort</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2-2">Salang Pusaka Resort</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2-3">Pondok Sri Salang</a> </li>
          </ul>
          <!-- /.nav-tabs -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab2-1">
              <div class="row">
                <div class="col-md-12">
                  <div class="space50"></div>
                  <div class="table-responsive">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                        <th style="width: 35%;" scope="col">ROOM TYPE</th>
                        <th style="width: 30%;" scope="col">BEDS</th>
                        <th style="width: 10%;" scope="col">SHOWER</th>
                        <th style="width: 10%;" scope="col">FRIDGE</th>
                        <th style="width: 15%;" scope="col">PRICE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Basic Fan</td>
                          <td>1 Double</td>
                          <td>Cold</td>
                          <td>No</td>
                          <td>RM 60</td>
                        </tr>
                        <tr>
                          <td>Basic a/c</td>
                          <td>1 Double</td>
                          <td>Cold</td>
                          <td>No</td>
                          <td>RM 110</td>
                        </tr>
                        <tr>
                          <td>Basic Family a/c</td>
                          <td>2 Double + 1 Single</td>
                          <td>Cold</td>
                          <td>No</td>
                          <td>RM 140</td>
                        </tr>
                        <tr>
                          <td>Standard Hillside Twin a/c</td>
                          <td>1 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 150</td>
                        </tr>
                        <tr>
                          <td>Standard Quad a/c</td>
                          <td>2 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 240</td>
                        </tr>
                        <tr>
                          <td>Deluxe Hillside Twin a/c</td>
                          <td>1 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 180</td>
                        </tr>
                        <tr>
                          <td>Deluxe Garden View Triple a/c</td>
                          <td>1 Double + 1 Single</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 240</td>
                        </tr>
                        <tr>
                          <td>Deluxe Garden View Quad a/c</td>
                          <td>2 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 380</td>
                        </tr>
                        <tr>
                          <td>Standard Hillside Family a/c</td>
                          <td>2 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 240</td>
                        </tr>
                        <tr>
                          <td>Deluxe Sea Veiw a/c 1</td>
                          <td>2 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 380</td>
                        </tr>
                        <tr>
                          <td>Deluxe Sea Veiw a/c 2</td>
                          <td>1 Double + 1 Single</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 330</td>
                        </tr>
                        <tr>
                          <td>Deluxe Family Sunset View a/c</td>
                          <td>2 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 380</td>
                        </tr>
                        <tr>
                          <td>Deluxe Family Hillside View a/c</td>
                          <td>2 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 380</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>※ Surcharge for school/public holidays: RM 20 per night<br>※ Adding a mattress: RM 30 per night</p>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane fade" id="tab2-2">
              <div class="row">
                <div class="col-md-12">
                  <div class="space50"></div>
                  <div class="table-responsive">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                        <th style="width: 30%;" scope="col">ROOM TYPE</th>
                        <th style="width: 35%;" scope="col">BEDS</th>
                        <th style="width: 10%;" scope="col">SHOWER</th>
                        <th style="width: 10%;" scope="col">FRIDGE</th>
                        <th style="width: 15%;" scope="col">PRICE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Standard a/c</td>
                          <td>1 Double or 2 Single</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 140</td>
                        </tr>
                        <tr>
                          <td>Deluxe a/c</td>
                          <td>1 Double or 2 Single</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 160</td>
                        </tr>
                        <tr>
                          <td>Superior a/c</td>
                          <td>1 Double</td>
                          <td>Hot</td>
                          <td>Yes</td>
                          <td>RM 180</td>
                        </tr>
                        <tr>
                          <td >Pusaka Suite a/c</td>
                          <td >1 Double</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 260</td>
                        </tr>
                        <tr>
                          <td >Love Suite a/c</td>
                          <td >1 Double + 1 Single</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 360</td>
                        </tr>
                        <tr>
                          <td >Deluxe Triple a/c</td>
                          <td >1 Double + 1 Single or 3 Single</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 180</td>
                        </tr>
                        <tr>
                          <td >Superior Triple a/c</td>
                          <td >1 Double + 1 Single</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 200</td>
                        </tr>
                        <tr>
                          <td >Standard Quad a/c</td>
                          <td >2 Double</td>
                          <td >Hot</td>
                          <td >No</td>
                          <td >RM 150</td>
                        </tr>
                        <tr>
                          <td >Deluxe Quad a/c</td>
                          <td >2 Double</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 200</td>
                        </tr>
                        <tr>
                          <td >Pusaka Suite Quad a/c</td>
                          <td >2 Double</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 250</td>
                        </tr>
                        <tr>
                          <td >Garden Family Suite a/c</td>
                          <td >2 Double + 1 Single</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 240</td>
                        </tr>
                        <tr>
                          <td >Love Family Suite a/c</td>
                          <td >2 Double + 1 Single</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 460</td>
                        </tr>
                        <tr>
                          <td >Tropical Family Suite a/c</td>
                          <td >For 11 pax</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 550</td>
                        </tr>
                        <tr>
                          <td >Soul Family Suite a/c</td>
                          <td >For 9 pax</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 700</td>
                        </tr>
                        <tr>
                          <td >Home Style Villas a/c<br>
                          (3-4 bedrooms)</td>
                          <td >For 7-14 pax</td>
                          <td >Hot</td>
                          <td >Yes</td>
                          <td >RM 1000 – RM1500</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane fade" id="tab2-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="space50"></div>
                  <div class="table-responsive">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th style="width: 25%;" scope="col">ROOM TYPE</th>
                          <th style="width: 40%;" scope="col">BEDS</th>
                          <th style="width: 10%;" scope="col">SHOWER</th>
                          <th style="width: 10%;" scope="col">FRIDGE</th>
                          <th style="width: 15%;" scope="col">PRICE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td >Twin Room a/c</td>
                          <td >1 Double</td>
                          <td >Hot</td>
                          <td >No</td>
                          <td >RM 150</td>
                        </tr>
                        <tr>
                          <td >Triple Room a/c</td>
                          <td >1 Double + 1 Single or 3 Single</td>
                          <td >Hot</td>
                          <td >No</td>
                          <td >RM 180</td>
                        </tr>
                        <tr>
                          <td >Quad Room a/c</td>
                          <td >2 Double</td>
                          <td >Hot</td>
                          <td >No</td>
                          <td >RM 210</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.tabs-wrapper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->
