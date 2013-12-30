<?php
include_once('template.php');
head();
?>


<div class="row" style="margin-top: 30px;">
    <div class="large-12 columns">

    <!-- Desktop Slider -->

      <div class="slideshow-wrapper hide-for-small">
         <div class="preloader"></div>
        <ul id="featured" data-orbit data-options="timer_speed:3000;pause_on_hover:false;">
          
              <li><img src="img/vitcmun_poster.jpg" alt="VITC MUN'13"></li>
              <li><img src="img/scene1.jpg" alt="Scene1 VITC MUN'12"></li>
              <li><img src="img/scene2.jpg" alt="Scene2 VITC MUN'12"></li>
              <li><img src="img/scene5.jpg" alt="Scene3 VITC MUN'12"></li>
          </ul>
  </div>
        </div>
    </div>
    <!-- End Desktop Slider -->

<div class="row">
<div data-alert class="large-5 large-offset-4 columns alert-box secondary round" style="opacity: 1;margin-top: 5px;">
  Last date for applications is 5 September. 
  <a href="#" class="close">&times;</a>
</div>
</div>


    <!-- Mobile Header -->


    <div class="row">
      <div class="small-12 show-for-small"><br>
        <img src="img/poster2.jpg" />
      </div>
    </div>


  <!-- End Mobile Header -->

  <div class="row" style="opacity: 0.8">
    <div class="large-12 columns">
      <div class="row">

    <!-- Content -->

        <div class="large-12 columns">
          <div class="panel radius">

          <div class="row">
          <div class="large-11 small-11 columns">  
          
            <h4>VITC MUN is back!</h4><hr/>
            <p class="subheader" class="description">The platform for invigorating debate is set. The DebSoc introduces the resurrection of the VITCMUN. A Model United Nations Conference, as the name suggests, is a simulation of the proceedings that take place at the United Nations' conferences. Applicants shall be allotted nations, and they shall represent their respective nations in council. Delegates are assigned the task of expressing their nations views pertaining to the pre-decided agendas to the best of their abilities.
Due to unavoidable circumstances last March, the scheduled VITCMUN '13 was cancelled. But now we are back and in this edition of The VITCMUN, we present 3 councils:<br/></p>
<ul class="large-offset-1 ">
<li>General Assembly (GA)</li>
<li>Indian Crisis Council</li>
<li>United Nations Environment Programme (UNEP)</li>
</ul>
          </div>
        </div>
        </div>


    <!-- End Content -->

      </div>
    </div>
  </div>
</div>
  
   <div class="row">
    <div class="large-12 columns">
      <div class="row" id="councils">

    <!-- Thumbnails -->

        <div class="large-4 small-6 columns">
            <a href="ga.php">
          <img src="img/ga.jpg" width="100%" title="General Assembly"/>
          <h6 class="panel">General Assembly<br/></h6>
          </a>
        </div>

        <div class="large-4 small-6 columns">
            <a href="icc.php">
          <img src="img/ip.jpg" width="100%" title="Indian Crisis Council"/>
          <h6 class="panel">Indian Crisis Council</h6>
          </a>
        </div>

        <div class="large-4 small-6 columns">
            <a href="unep.php">
          <img src="img/unep.jpg" width="100%" title="UN Environment Protocol"/>
          <h6 class="panel">UN Environment Programme</h6>
          </a>
        </div>
        
    <!-- End Thumbnails -->

      </div>
    </div>
  </div>
<?php
tail();
?>
