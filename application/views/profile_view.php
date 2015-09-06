<div id="profile_view">
<div class="row">
  <div class="col-md-12 clear">
     <div class="profile_img col-xs-4 col-md-4">
      <div class="frame shadow"><img src="<?php echo base_url(); ?>assets/img/slider-img/thumb/thumb1.jpg" /></div>
     </div>     
     <div class="profile_info col-xs-8 col-md-8">
      <div class="row">
       <div><h3><small>Scientist Name: </small><?php echo $data->sci_last . ", " . $data->sci_first; ?></h3></div>
       <div><h3><small>Scientist ID:</small><?php echo $data->SCI_ID; ?></h3></div>
       <div><h3><small>Gender:</small> Male</h3></div>
       <div><h4><small>Date Created:</small> 2001-06-26</h4></div>
       <div><h4><small>Date Updated:</small>2015-01-13</h4></div> 
      </div> 
     </div>
  </div>
</div>
<div class="row">
   <div class="col-md-12 panel">
       <div class="tab-features">
        <div role="tabpanel" id="profileTab">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#expertise" aria-controls="home" role="tab" data-toggle="tab">Expertise</a></li>
            <li><a href="#education" role="tab" data-toggle="tab">Education</a></li>
            <li><a href="#employment" role="tab" data-toggle="tab">Employment</a></li>
            <li><a href="#association" role="tab" data-toggle="tab">Association</a></li>
            <li><a href="#training" role="tab" data-toggle="tab">Training</a></li>
            <li><a href="#award" role="tab" data-toggle="tab">Award</a></li>
            <li><a href="#affiliation" role="tab" data-toggle="tab">Affiliation</a></li>
            <li><a href="#publication" role="tab" data-toggle="tab">Publication</a></li>
            <li><a href="#research" role="tab" data-toggle="tab">Research</a></li>
            <li><a href="#papers" role="tab" data-toggle="tab">Papers</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="expertise">
			 <?php $this->load->view('profile/expertise');?>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="education">
			 <?php $this->load->view('profile/education');?>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="employment">
              <?php 
                foreach($data_emp->result() as $row){
                  echo "Institution: ". $row->I_ID . "<br>";
                  echo "Position: ". $row->Position . "<br>";
                  echo "Start Date: ". $row->StartDate . "<br>";
                  echo "End Date: ". $row->EndDate . "<br><br>";
                }
              ?>
            </div>
          </div>
          <!-- end Tab panes -->
        </div><!-- end tabpanel -->
       </div><!-- end content-area -->
   </div><!-- end content-area -->
</div>
</div>