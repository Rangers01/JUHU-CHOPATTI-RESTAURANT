<body class="conclass">
	<div class="bg img-responsive"></div>
        <!--Container 1 Start-->
        <?php include ("header.php"); ?>
         
           <!--Container 1 End-->
           
           <!--Container 2 Start-->
          <div class="container 2">
             <div class="row row1" id="con">
             	 <div class="col-md-12">
                    <div class="strip">
                    	<p>CONTACT US</p>
                    </div>
                 </div>
             </div>
             <br/>
            <div class="row row2">
              <div class="col-md-6"> 
                 <p style="color:#06C; font-size:20px; font-family: 'Times New Roman', Times, serif;";><strong>OPENING HOURS: MON-FRI 11:00 AM TO 10:30 PM <br /> SAT-SUN 11:00 AM TO 11:00 PM</p></strong>
                        <br/><br/>
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                        
                       <div style='overflow:hidden;height:300px;width:100%;'>
                       	<div id='gmap_canvas' style='height:300px;width:100%;'></div>
                        <div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div>
                        <div><small><a href="http://www.autohuren.world/">autohuren</a></small></div>
						<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                       </div>
                   
                </div>
                                  
                <div class="col-md-6">
                 <p style="color:#06C; font-size:20px; font-family: 'Times New Roman', Times, serif;"> <strong>TELL US WHAT DO YOU THINK <br/> AND HOW WE'RE DOING.WRITE US HERE </strong></p> 
                 <br/><br/>
                  <?php
						 include('connect.php');
						 if(isset($_POST['submit']))
						 {
							
							$fname=$_REQUEST['name'];
							$email=$_REQUEST['email'];
							$message=$_REQUEST['message'];
							$sql1="insert into `contact_us` (`name` , `email`, `message`, `contact_date`)values('$fname', '$email', '$message', Now())";
							$res=mysql_query($sql1);
							if($res>=1)
							{
								
								echo '<div class="success">Thank you for
								connecting with us!, we will contact you soon...</div>';
							}
							else
							{
								echo '<div class="errormsgbox">oops! Error Occured in connecting, Try again after sometime...</div>';
							}
						  }
					   ?>
               <form class="form-horizontal" role="form" method="post" action="">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required="required">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" required="required">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message" placeholder="Message" required="required"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn badge-success" style="background-color:#E24E2A;color: #FFF;">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
              </form>         
            </div>
          </div>
        </div>
     <!--Container 2 End-->
    <!--Footer Start--> 
   <?php include ("footer.php"); ?>

