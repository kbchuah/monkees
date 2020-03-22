<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use frontend\models\ContactForm;
?>

  <h2 class="section-title mb-40 text-center hide-md">Looking for us? <br>Contact us via <span class="typer" data-delay="100" data-delim=":" data-words="facebook:instagram:email:form below:phone"></span><span class="cursor" data-owner="typer"></span> </h2>
  <h2 class="section-title mb-40 text-center show-md">Contact us via <br><span class="typer" data-delay="100" data-delim=":" data-words="facebook:instagram:email:form below:phone"></span><span class="cursor" data-owner="typer"></span> </h2>
  <div class="row">
    <div class="col-md-8">
      <h2 class="section-title">Get in Touch</h2>
      <p>If you have any general questions or queries and cannot find the answer(s) on our website, please use the form below to directly contact us and we’ll get back to you as soon as possible unless if we’re out diving.</p>
      <div class="space10"></div>
      <div class="form-container">
        <?php
        $form = ActiveForm::begin(['id' => 'contact-form']); ?>
          <div class="row text-center">
            <div class="col-md-6 pr-10">
              <div class="form-group">
                <?= $form->field($model, 'name')->textInput(['placeholder' => "Your Name"])->label(false) ?>
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-md-6 pl-10">
              <div class="form-group">
                <?= $form->field($model, 'email')->textInput(['placeholder' => "Your Email"])->label(false) ?>
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-md-6 pr-10">
              <div class="form-group">
                <?= $form->field($model, 'phone')->textInput(['placeholder' => "Phone"])->label(false) ?>
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-md-6 pl-10">
              <div class="form-group">
                <?= $form->field($model, 'subject')->textInput(['placeholder' => "Subject"])->label(false) ?>
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-12">
              <?= $form->field($model, 'body')->textArea(['rows' => 6, 'placeholder' => "Type Your Message Here.. "])->label(false) ?>
              <div class="space20"></div>
              <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-full-rounded state-initial', 'name' => 'contact-button']) ?>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->

        <?php ActiveForm::end(); ?>

        <?php /*?>
        <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="" data-vf-id="daf49148-9058-c47f-e922-9562d77936fd">
          <div class="row text-center">
            <div class="col-md-6 pr-10">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-md-6 pl-10">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-md-6 pr-10">
              <div class="form-group">
                <input type="tel" class="form-control" name="tel" placeholder="Phone">
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-md-6 pl-10">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <!--/.form-group -->
            </div>
            <!--/column -->
            <div class="col-12">
              <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required=""></textarea>
              <div class="space20"></div>
              <button type="submit" class="btn btn-full-rounded state-initial" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!" data-initial="" value="">Submit</button>
              <footer class="notification-box"></footer>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </form>
        <!--/.vanilla-form -->
        <?php */?>

      </div>
      <!--/.form-container -->
    </div>
    <!--/column -->
    <aside class="col-md-4 sidebar">
      <div class="sidebox widget">

        <h5 class="widget-title">Address</h5>
        <p>Somewhere in Kg Salang, Tioman</p>
        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.7915035883602!2d104.15246661382128!3d2.876425997904856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c504e4dd5bbe51%3A0x480a274ccdeff641!2sMarine+Monkees!5e0!3m2!1sko!2skr!4v1493451186227" width="100%" height="250" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        <ul class="icon-list">
          <li><i class="fa fa-envelope"></i><a href="mailto:info@marinemonkees.com.my" class="nocolor">info@marinemonkees.com.my</a></li>
          <li><i class="fa fa-phone-square"></i>+609 419 5100 (office)</li>
          <li><i class="fa fa-phone-square"></i>+6012-2067107 (Shonny Loh)</li>
          <li><i class="fa fa-phone-square"></i>+6012-3766638 (Paul Lai)</li>
        </ul>

        <h5 class="widget-title">Connect</h5>
        <ul class="icon-list">
          <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/marinemonkees/" class="nocolor">/marinemonkees</a></li>
          <li><i class="fa fa-facebook-f"></i><a href="https://www.facebook.com/MMonkees/" class="nocolor">/MMonkees</a></li>
        </ul>

      </div>
      <!-- /.widget -->
    </aside>
    <!-- /column .sidebar -->
  </div>
  <!--/.row -->
