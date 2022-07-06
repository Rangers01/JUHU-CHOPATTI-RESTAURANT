<body style="background-image:url(images/8801af2eb14de26b0890abadf7f276f7_large.jpeg); background-attachment:fixed;">
      <!-- Header Container start-->
		
        <div class="bg"></div>
        <?php include ("header.php"); ?>
         <?php 
        if(!isset($_SESSION['fname']))
		   {
			   echo "<script>
						alert('Please Login First to make your reservation!');
						window.location.href='index.php';
						</script>";
		   }
			?>
            <!--Form code Start--> 
            <div class="container">
              <div class="row">
              	<div class="col-md-12">
              	  <div id="banner">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        	  <div class="form-top-left">
                        	    <h3>Book Our Service Here</h3>
                            	<p style="size:10px">Fill in the form below to send us a message:</p>
                        	  </div>
                              <div class="form-top-right">
                        	    <i class="fa fa-envelope"></i>
                        	  </div>
                            </div>
                        <div class="form-bottom contact-form" style="height:450px;">
                          <?php
						 include('connect.php');
						 if(isset($_POST['reservation']))
						 {
							
							$fname=$_REQUEST['name'];
							$email=$_REQUEST['email'];
							$mobile=$_REQUEST['mob'];
							$time=$_REQUEST['time'];
							$date=$_REQUEST['date'];
							$message=$_REQUEST['message'];
							$sql1="insert into `orders` (`name` , `email`, `mobile`, `time`, `date`, `message`, `Reservation_date`)values('$fname', '$email', '$mobile', '$time', '$date', '$message', Now())";
							$res=mysqli_query($con,$sql1);
							if($res>=1)
							{
								
								echo '<div class="success">Thank you for
								Booking with us!, your table is now reserved...</div>';
							}
							else
							{
								echo '<div class="errormsgbox">oops! Error Occured in Reservation, Try again after sometime...</div>';
							}
						  }
					   ?>
			             <form role="form" action="" method="post">
                         <?php
						require_once("connect.php");
						if(isset($_SESSION['fname']))
						{
						  $sql = "select * from register_users where firstname = '".$_SESSION['fname']."'";
						  $result = mysqli_query($con,$sql);
						  while($row=mysqli_fetch_array($result)) 
						   {  
							  $_SESSION['User_Fname']=$row['firstname'];
							  $_SESSION['Lname']=$row['lastname'];
							  $_SESSION['Email']=$row['email'];
							  $_SESSION['Phone']=$row['mobile'];
						   
						?>
                           <div class="form-group">
			                 <label class="sr-only" for="contact-subject">Name</label>
			                   <input type="text" name="name" placeholder="Name..." class="contact-subject form-control" id="contact-name" value="<?php echo $_SESSION['User_Fname'] . ' ' . $_SESSION['Lname']; ?>">
			               </div>
			               <div class="form-group">
			                 <label class="sr-only" for="contact-email">Email</label>
			                   <input type="email" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email" required value="<?php echo $_SESSION['Email'] ?>">
			               </div>
			               <div class="form-group">
			                 <label class="sr-only" for="contact-subject">Telephone</label>
			                 <input type="tel" name="mob" placeholder="Telephone..." class="contact-subject form-control" id="contact-subject" required value="<?php echo $_SESSION['Phone'] ?>">
			               </div>
                           <div class="form-group">
                             <div class="input-group bootstrap-timepicker timepicker">
			                  <label class="sr-only" for="contact-subject">Time</label>
			                  <input type="time" name="time" placeholder="eg: 1:00 PM" class="contact-subject form-control" id="contact-subject" required>
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                              </span>
                            </div>
                          </div>
                           <script type="text/javascript">
                             $(function () {
                               $('#datetimepicker3').datetimepicker({
                                 format: 'LT'
                                });
                              });
                           </script>
                          
                           <div class="form-group">
                           	 <div id="datetimepicker4" class="input-append">
			                 <label class="sr-only" for="contact-subject">Date</label>
			                 <input type="date" name="date" placeholder="eg: 01-06-16" class="contact-subject form-control" id="contact-subject" required>
                             <span class="add-on">
                               <span class="glyphicon glyphicon-date"></span>
                             </span>
                             </div>
			               </div>
			                <script type="text/javascript">
                              $(function() {
                                $('#datetimepicker4').datetimepicker({
                                  pickTime: false
                                });
                              });
                            </script>
			               <div class="form-group">
			                  <label class="sr-only" for="contact-message">Message</label>
			                  <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
			               </div>
			                  <input type="submit" name="reservation" value="Book Now!" class="btn" style="float:left"/>
                               <?php 
							   } } ?>
			                </form>
                           
		                   </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   <!--form code End-->
              	 </div>
              </div>
</body>
         <!--container End-->
         <!--Footer container Start-->
         <?php include ("footer.php"); ?> 
       <!--footer container End-->   

