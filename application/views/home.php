<div class="row">
     <div class="col-md-12">
       <div class="panel tab-features clear col-md-12">
        <div role="tabpanel">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist" id="myTab"> 
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><h4 class="title">Popular <span>Articles</span></h4></a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h4 class="title">Recent <span>Articles</span></h4></a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><h4 class="title">New <span>Articles</span></h4></a></li>
            <!--  <li role="presentation"><a href="#chos" aria-controls="messages" role="tab" data-toggle="tab"><h4 class="title">Getting to <span>Know</span></h4></a></li>-->
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <?php 
              foreach ($data_article->result() as  $row ){
                echo " ".$row->content. "<br>" ;
              }

              ?>  
            </div>
            
            <div role="tabpanel" class="tab-pane" id="profile">
             <?php 
              foreach ($data_articlerecent->result() as  $row ){
                echo " ".$row->abstract. "<br>" ;
              }

              ?>   
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
               <?php 
              foreach ($data_articlenews->result() as  $row ){
                echo " ".$row->content. "<br>" ;
              }

              ?>   
            </div>
           


          </div>
          <!-- end Tab panes -->
        </div><!-- end tabpanel -->
       </div><!-- end panel -->
     </div><!-- end col-md-12 -->
   </div>
   <div class="row">
     <div class="col-md-8">
       <div class="panel featured-stories clear">
        <h3 class="title">Featured <span>Profile</span></h3>
        <div class="img-holder md col-md-5"><img src="assets/img/scientist/gallery04.jpg" class="img-thumbnail"></div>
        <div class="meta-holder col-md-7">"Ego non baptizo te in nomine patris, sed in nomine diaboli!" deliriously howled Ahab, as the malignant iron scorchingly devoured the baptismal blood.

Now, mustering the spare poles from below, and selecting one of hickory, with the bark still investing it, Ahab fitted the end to the socket of the iron. A coil of new tow-line was then unwound, and some fathoms of it taken to the windlass, and stretched to a great tension. Pressing his foot upon it, till the rope hummed like a harp-string, then eagerly bending over it, and seeing no strandings, Ahab exclaimed, "Good! and now for the seizings."</div>
        <button class="readmore-btn"><i class="fa fa-external-link"></i>&nbsp;&nbsp;&nbsp;Read More&nbsp;</button>
       </div><!-- end panel -->
     </div><!-- end col-md-8 -->
     <div class="col-md-4">
       <div class="panel articles clear">
        <h3 class="title">Latest <span>Articles</span></h3>
        <div class="article-list">
         <ul>
           <li>
            <div class="icon-pdf"><i class='fa fa-file-pdf-o fa-lg'></i></div>
            <div class="article-info">
              In vulputate sem quis metus. Ut convallis.<br/>
              <em>August 17, 2008 – 1:38 am</em>
            </div>
           </li>

           <li>
            <div class="icon-pdf"><i class='fa fa-file-pdf-o fa-lg'></i></div>
            <div class="article-info">
              Gravida mauris. Suspendisse ligula. Duis rutrum.<br/>
              <em>August 17, 2008 – 1:38 am</em>
            </div>
           </li>

           <li>
            <div class="icon-pdf"><i class='fa fa-file-pdf-o fa-lg'></i></div>
            <div class="article-info">
              Etiam tristique pulvinar velit. Curabitur sed tortor.<br/>
              June 23, 2008 – 11:33 am
            </div>
           </li>
           <li>
            <div class="icon-pdf"><i class='fa fa-file-pdf-o fa-lg'></i></div>
            <div class="article-info">
              Proin convallis turpis sed dui. Sed at velit eu felis.<br/>
              <em>August 17, 2008 – 1:38 am</em>
            </div>
           </li>
         </ul>
        </div><!-- end article-list -->
       </div><!-- end panel -->
     </div><!-- end col-md-4 -->     
   </div><!-- end row -->