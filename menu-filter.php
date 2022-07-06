<?php 
if(!empty($_GET['genm'])){
  $genm=$_GET['genm'];
  include('connect.php');

  $r="select * from menu where cat='$genm'";
 
  $sql=mysqli_query($con,$r);
   $row=mysqli_num_rows($sql);?>
   <?php
  if($row>=1)
  {
   while($arr=mysqli_fetch_array($sql)){ 
               ?>
         <div class="menu">
       <img src='images/Orange-dot-pattern-menu-background-vector.jpg' style="background-size:cover; background-position:center center; background-repeat:repeat-x; max-width:100%;"/>
              <div class="row">
                 <div class='col-md-4 style2'>Item Name</div> <div class="col-md-2 style4">:</div> <div class="col-md-6 style3">
         <?php echo $arr['i_name']; ?></div>
                 <div class='col-md-4 style2'>Item Price</div> <div class="col-md-2 style4">:</div> <div class="col-md-6 style3">
         <?php echo $arr['i_price']; ?></div>
                 <div class='col-md-4 style2'>Description</div> <div class="col-md-2 style4">:</div> <div class="col-md-6 style3">
         <?php echo $arr['i_des']; ?></div>
              </div>
       </div>  
           <?php 
                           
           } 
         } 
         
       else{
        ?>
<div >
              <div  class="job-ad-item">
                <div class="item-info">
                  
                  <div class="ad-info">
                    <span><h3>Sorry, No Khana Found!!</h3></span>
                                    
                  </div><!-- ad-info -->
                </div><!-- item-info -->
              </div><!-- job-ad-item -->  
              </div>      


       <?php } 
       }
       ?> 