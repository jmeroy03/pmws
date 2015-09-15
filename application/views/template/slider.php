<div id="sliding-img-area" class="container">
  <div class="row">
     <div class="col-md-8">
        <div class="featured-img shadow">
        <div id="slider">
            <img src="assets/img/slider-img/gallery01.jpg" alt="#caption" />
            <img src="assets/img/slider-img/gallery02.jpg" alt="#caption" />
            <img src="assets/img/slider-img/gallery03.jpg" alt="#caption" />
            <img src="assets/img/slider-img/gallery04.jpg" alt="#caption" />
            <img src="assets/img/slider-img/gallery05.jpg" alt="#caption" />
            <img src="assets/img/slider-img/gallery06.jpg" alt="#caption" />
            <img src="assets/img/slider-img/gallery05.jpg" alt="#caption" />
            <img src="assets/img/slider-img/gallery06.jpg" alt="#caption" />
           </div> 
        </div>
        <div style="display: none;">
            <div id="caption"> 
                <h3>Yumul Jr., Graciano P.</h3>
      	<span class=""><h4>The vet, dreamer and gardener</h4></span>
      	<p>Etiam risus nisi, molestie in ultricies sit amet, tempus accumsan nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
            </div>
        </div>
    </div>

    <div class="slider-switcher col-md-4">
           <div class="switcher-wrapper">
        <h2 class="sidebar-title">Heart of a <span>Beautiful Mind</span></h2>
       
       <!--thumbnails-->
       <?php for ($i=0; $i < count($data_scientist); $i++) {
        ?>

       

       <div id="thumbs">
           <div class="thumb"> 
                <div class="frame"><img src="<?php echo base_url()?>assets/img/slider-img/thumb/<?php echo $data_scientist[$i]["profile_pic"]?>" /></div>
                <div class="thumb-content"><p><?php echo $data_scientist[$i]["Fullname"]?> </p>Geochemistry and Environmental Geology</div>
                <div style="clear:both;"></div>
            </div>  
        </div> 

      
 

      <?php } ?>

      </div>
      </div>
      </div>
      </div>
      

