<div id="scientist_profile">
  <div class="row">
    <h1 class="title">Scientist <span>Profile</span></h1>
    <div class="profile_wrapper col-md-12">      
      
<?php foreach ($data->result() as $row) echo ' <div class="profile_entry col-md-6">
        <div class="frame">
          <div class="profile_data">
            <div><h4><small>ID:'. $row->SCI_ID .'</small></h4></div>
              <div class="rcol"><h4><small>Name:'.$row->sci_last.', '.$row->sci_first.'</small></h4></div>
              <div><h4><small>PMWS Volume:'.$row->pmsvol.'</small> </h4></div>
                <div class="rcol"><h4><small>Last Updated:'.$row->date_created.'</small></h4></div>
          </div>
            <div class="silhouette"></div>
            <div class="view-icon">
              <a href="'. base_url() .'profile/view/'. $row->SCI_ID .'">view profile
                <i class="fa fa-external-link" data-url="'. base_url() .'profile/view/'. $row->SCI_ID .'" title="view information"></i>
              </a>
                </div>
            </div>
        </div>';
?>
     
   
    </div>
  </div>
</div>
<div class="profile-pagenav">
   <a class="prevpostslink" rel="prev" href="#"><i class="fa fa-angle-double-left"></i></a>
   <a class="page shadow-radial shrink" href="#"> <?php echo $this->pagination->create_links(); ?> </a>
 
   <a class="nextpostslink" rel="next" href="#"><i class="fa fa-angle-double-right"></i></a>
</div>
