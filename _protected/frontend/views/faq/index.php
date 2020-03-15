<?php
use yii\web\View;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name) . ' | ' . Yii::t('app', 'FAQ');

?>

<div class="wrapper light-wrapper">
  <div class="container inner">
    <h2 class="section-title mb-40 text-center">FAQs</h2>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div id="accordion1" class="accordion-wrapper bordered">
          <div class="card">
            <div class="card-header">
              <h3> <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-1"> What is the diving like?</a> </h3>
            </div>
            <!-- /.card-header -->
            <div id="collapse1-1" class="collapse show">
              <div class="card-block">
                <p>Located in The South China sea, Tioman Island has warm pleasant waters (28C-30C), so no need to bring your dry suit. Shore diving is sheltered and has little to no current,
                  whilst exploring the outer remote islands such as Chebeh and Labas, the conditions vary on tide time and other weather related effects.The dive sites can range from 10m-14m to 18m-30m plus in depth.</p>
                <p>As for actual marine life Tioman boast a wide and varied selection, ranging from small box-fish, nudibranch, huge schools of fusilier, Barracuda, stonefish, cuttlefish,
                  turtles and sharks just to name a few. The marine life has a back drop of hard and soft corals, swim-throughs and cascading volcanic rock formations. There are also a few wrecks
                  for you to explore. Rogers wreck is right in front of Salang bay and KM Sipidan, a Royal Navy Vessel sunk on purpose to benefit local aquatic life is just a short 10 minute boat ride away.</p>
                <p>For more detailed information on individual dive sites, checkout the Dive Sites link on our website.</p>
              </div>
              <!-- /.card-block -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3> <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1-2"> What should I prepare for the diving trip?</a> </h3>
            </div>
            <!-- /.card-header -->
            <div id="collapse1-2" class="collapse">
              <div class="card-block">
                <p>Tioman is an isolated island, so basic items are usually more expensive than on the main land. Also there is no ATM in Salang. The closest ATM in located in Tekek,
                  a short boat ride away. Below is a short list of recommended items for your course/diving trip.</p>
                <p>1. Passport/IC card<br>
                   2. Towel<br>
                   3. Swimwear<br>
                   4. Swim Cap (for Sun protection and for those with lots of hair)<br>
                   5. Sun Cream / Sun Burn Cream (Reef Friendly Recommended)<br>
                   6. Toiletries<br>
                   7. Rash Guard<br>
                   8. Certification card (Don’t forget it if you are already a certified diver)<br>
                   9. Log Book (Don’t forget it if you are already a certified diver)<br>
                   10. Small medical supply (Antihistamine, insect bite protection, pain killer, plasters)<br>
                   11. Sea Sickness pills (make sure they are non drowsy)
               </p>
              </div>
              <!-- /.card-block -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3> <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1-3"> How do I book accommodation?</a></h3>
            </div>
            <!-- /.card-header -->
            <div id="collapse1-3" class="collapse">
              <div class="card-block">
                <p>You can search for accommodation yourself or you can check out our recommended resorts and price list <a href="<?= Url::to(['tioman/#accommodation']) ?>">here</a>. If you choose one of our recommended resorts, email us, let us know which resort and room you would like and we will book it for you.</p>
              </div>
              <!-- /.card-block -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3> <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1-4">Is there any promotional offers?</a></h3>
            </div>
            <!-- /.card-header -->
            <div id="collapse1-4" class="collapse">
              <div class="card-block">
                <p>We advertise promotional offers through out the year. If there is any ongoing offer then it will be posted on our websites main page. However, if you have your own equipment, we offer a discount price on all fun dives. </p>
              </div>
              <!-- /.card-block -->
            </div>
            <!-- /.collapse -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.accordion-wrapper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->
