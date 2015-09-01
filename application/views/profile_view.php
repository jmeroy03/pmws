<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    

    $asset_url = array(
        'popup_/jquery-1.9.1.js',
        'popup_/nhpup_1.1.js',
        'bootstrap-tabcollapse/lib/js/jquery-1.10.1.min.js',
        'bootstrap-3.3.4/dist/js/bootstrap.js',
        'bootstrap-tabcollapse/lib/js/bootstrap.js',
        'bootstrap-tabcollapse/bootstrap-tabcollapse.js',
        'silviomoreto-bootstrap-select/dist/js/bootstrap-select.js'
    );

    $js_url = array(
        'jquery.min.js',
        'jquery-1.11.3.min.js',
        'jquery-1.7.2.js',
        'jquery-ui-1.10.3.min.js',
        'bootstrap.min.js',
        'moment.js',
        'custom_js/custom_datetime_script.js',
        'raphael-min.js',
        'plugins/morris/morris.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/jqueryKnob/jquery.knob.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/ckeditor/ckeditor.js',
        'plugins/iCheck/icheck.min.js',
        'plugins/input-mask/jquery.inputmask.js',
        'plugins/input-mask/jquery.inputmask.date.extensions.js',
        'plugins/input-mask/jquery.inputmask.extensions.js',
        'i18n/defaults-*.min.js',
        'custom_js/custom_ck_editor.js',
        'custom_js/custom_datemask.js',
        'custom_js/custom_radiocheck.js',
        'custom_js/custom_script_authorityentries.js',
        'custom_js/custom_script_nonfilingcharacter.js',
        'custom_js/custom_script_nonfilingcharacter2.js',
        'custom_js/custom_typeofinfoprovided_script.js',
        'custom_js/custom_typeofinfoprovided_script2.js',
        'custom_js/custom_subjectaccess_script.js',
        'custom_js/custom_collapsable_script.js',
        'custom_js/custom_datepicker_script.js',
        'custom_js/custom_toggle_script.js',
        'custom_js/custom_bootstrapselect_script.js',
        'custom_js/custom_responsivetab_script.js',
        'plugins/datatables/jquery.dataTables.js',
       
    );
?>  
   



<div id="profile_view">
<div class="row">
  <div class="col-md-12 clear">
     <div class="profile_img col-xs-4 col-md-4">
      <div class="frame shadow"><img src="assets/img/slider-img/thumb/thumb1.jpg" /></div>
     </div>     
     <div class="profile_info col-xs-8 col-md-8">
      <div class="row">
       <div><h3><small>Scientist Name: </small>Padolina, William G.</h3></div>
       <div><h3><small>Scientist ID:</small> 000001</h3></div>
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
            <div role="tabpanel" class="tab-pane fade" id="employment">...</div>
          </div>
          <!-- end Tab panes -->
        </div><!-- end tabpanel -->
       </div><!-- end content-area -->
   </div><!-- end content-area -->
</div>
</div>