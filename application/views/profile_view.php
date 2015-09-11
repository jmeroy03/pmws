<div id="profile_view">
<div class="row">
  <div class="col-md-12 clear">
     <div class="profile_img col-xs-4 col-md-4">
      <?php
        $picture = ""; 
        if($data->picname==null||$data->picname==""){ 
          $picture = "default.jpg"; 
        }else{
          $picture = $data->picname;
        }
      ?>
      <div class="frame shadow"><img src="<?php echo base_url()."pictures/". $picture; ?>" /></div>
     </div>     
     <div class="profile_info col-xs-8 col-md-8">
      <div class="row">
       <div><h3><small>Scientist Name: </small><?php echo $data->sci_last . ", " . $data->sci_first; ?></h3></div>
       <div><h3><small>Scientist ID:</small><?php echo $data->SCI_ID; ?></h3></div>
       <div><h3><small>Gender:</small><?php echo $data->gender; ?></h3></div>
       <div><h4><small>Date Created:</small><?php echo $data->date_created; ?></h4></div>
       <div><h4><small>Date Updated:</small><?php echo $data->last_updated; ?></h4></div> 
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
              <ul>
                  <li>             
            <?php 
                foreach($data_exp->result() as $row){
                 echo  " ". $row->D_Name .  "<br>";      
                }
              ?>


            </li>
          </ul>
            </div>

            <div role="tabpanel" class="tab-pane fade" id = "education">
			         <?php
                  foreach($data_edu->result() as $row){
                  echo "University: " . $row->univ . "<br>";
                  echo "Address: " .$row->addr . "<br>";
                  echo "Degree: " .$row->degree . "<br>";
                  echo "Date Finished: " .$row->datefin . "<br><br>";
              
                 }
               ?>


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
            <div role="tabpanel" class="tab-pane fade" id="association">
              <?php 
                foreach($data_ass->result() as $row){
                  echo "Association: ". $row->association . "<br>";
                  echo "Position: ". $row->position . "<br>";
                  echo "Start Date: ". $row->startdate . "<br>";
                  echo "End Date: ". $row->enddate . "<br><br>";
                }
              ?>
             
            </div>

             <div role="tabpanel" class="tab-pane fade" id="training">
              <?php 
                foreach($data_train->result() as $row){
                  echo "Course: ". $row->Course . "<br>";
                  echo "Start Date: ". $row->StartDate . "<br>";
                  echo "End Date ". $row->EndDate . "<br>";
                  echo "Place ". $row->Place . "<br><br>";

                }
              ?>
             
            </div>

            <div role="tabpanel" class="tab-pane fade" id="award">
              <?php 
                foreach($data_award->result() as $row){
                  echo "Award: ". $row->Awdname . "<br>";
                  echo "Acronym: ". $row->Acronym . "<br>";
                  echo "Date: ". $row->AwdDate . "<br><br>";
                }
              ?>
             
            </div>

            <div role="tabpanel" class="tab-pane fade" id="affiliation">
              <?php 
                foreach($data_affil->result() as $row){
                  echo "Position: ". $row->Position . "<br>";
                  echo "Office: ". $row->Office . "<br>";
                  echo "Address: ". $row->Address . "<br>";
                  echo "Telephone: ". $row->TelNo . "<br>";
                  echo "Fax No.: ". $row->FaxNo . "<br>";
                  echo "Email: ". $row->Email . "<br><br>";
                }
              ?>
            </div>

             <div role="tabpanel" class="tab-pane fade" id="publication">
              <?php 
                foreach($data_pub->result() as $row){
                  echo "Article: ". $row->Article . "<br>";
                  echo "Co Author: ". $row->CoAuthor . "<br>";
                  echo "Publication: ". $row->Publication . "<br>";
                  echo "Date Published: ". $row->PubDate . "<br>";
                  echo "Volume No.: ". $row->VolNo . "<br>";
                  echo "Issue No.: ". $row->IssueNo . "<br>";
                  echo "Pages: ". $row->Pagination . "<br><br>";
                  
                }
              ?>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="research">
              <?php 
                foreach($data_res->result() as $row){
                 echo "Title: ". $row->ResTitle . "<br>";
                  echo "Status: ". $row->ResStat . "<br><br>";
                  
                }
              ?>
            </div>


           <div role="tabpanel" class="tab-pane fade" id="papers">
              <?php 
                foreach($data_paper->result() as $row){
                 echo "Title: ". $row->title . "<br>";
                  echo "Presented: ". $row->presented_at . "<br>";
                  echo "Year Presented: ". $row->year_presented . "<br>";
                  echo "Pages ". $row->pagination . "<br><br>";

                  
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