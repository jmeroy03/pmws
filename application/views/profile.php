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
   

$this->$h = $h;

<div id="scientist_profile">
<div class="row">
    <h1 class="title">Scientist <span>Profile</span></h1>
    <div class="profile_wrapper col-md-12"> 
     
   

       <table border="1">  
        <tbody>  
         <tr>  
            <td>Last Name</td>  
            <td>First Name</td> 
            <?php foreach ($h -> result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->sci_last_name;?></td>  
            <td><?php echo $row->sci_first_name;?></td>  
            </tr>  
         <?php }  
         ?>   
         </tr>  
        
        </tbody>   
      </table>  

   
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
