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
        'i18n/defaults-*.min.js'
       
       
    );
?>  
   



<div id="scientist_profile">
<div class="row">
    <h1 class="title">Scientist <span>Profile</span></h1>
    <div class="profile_wrapper col-md-12"> 

       

 <?php foreach ($asset_url as $file) echo
        '<div class="profile_entry col-md-6">
            <div class="frame">
                <div class="profile_data">
                    <div><h4><small>ID:</small></h4></div>
                    <div class="rcol"><h4><small>Name: </small></h4></div>
                    <div><h4><small>PMWS Volume:</small></h4></div>
                    <div class="rcol"><h4><small>Last Updated:</small></h4></div>
                </div>
                <div class="silhouette"></div>
                <div class="view-icon">
                    <a href="<?=base_url()?>profile_view">view profile
                        <i class="fa fa-external-link" data-url="<?= base_url() ?>profile_view" title="view_information"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="profile_entry col-md-6">
            <div class="frame">
                <div class="profile_data">
                    <div><h4><small>ID:</small></h4></div>
                    <div class="rcol"><h4><small>Name: </small></h4></div>
                    <div><h4><small>PMWS Volume:</small></h4></div>
                    <div class="rcol"><h4><small>Last Updated:</small></h4></div>
                </div>
                <div class="silhouette"></div>
                <div class="view-icon">
                    <a href="<?=base_url()?>profile_view">view profile
                        <i class="fa fa-external-link" data-url="<?= base_url() ?>profile_view" title="view_information"></i>
                    </a>
                </div>
            </div>
        </div>



        '

        






         ?>
  

     
   
</div>
</div>
<div class="profile-pagenav">
   <a class="prevpostslink" rel="prev" href="#"><i class="fa fa-angle-double-left"></i></a>
   <a class="page shadow-radial shrink" href="#">1</a>
   <a class="page shadow-radial shrink" href="#">2</a>
   <a class="page shadow-radial shrink" href="#">3</a>
   <a class="page shadow-radial shrink" href="#">4</a>
   <a class="nextpostslink" rel="next" href="#"><i class="fa fa-angle-double-right"></i></a>
</div>
