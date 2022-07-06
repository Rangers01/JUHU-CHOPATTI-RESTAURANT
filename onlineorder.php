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
                        	    <h3>Place Your Order Here</h3>
                            	<p style="size:10px">Fill in the form below to place your order</p>
                        	  </div>
                              <div class="form-top-right">
                        	    <i class="fa fa-envelope"></i>
                        	  </div>
                            </div>
                        <div class="form-bottom contact-form" style="height:450px;">
                          <?php
						 include('connect.php');
						 if(isset($_REQUEST['order']))
						 {
							
							$fname=$_REQUEST['name'];
							$email=$_REQUEST['email'];
							$mobile=$_REQUEST['mob'];
							$address=$_REQUEST['address'];
							$item=$_REQUEST['select'];
							$sql1="insert into orderdetail (`name`,`email`,`mobile` ,`address`, `item`)values('$fname', '$email', '$mobile', '$address','$item')";
							
							$res=mysqli_query($con,$sql1);
							if($res>=1)
							{
								
								echo "<script>
								alert('Thank you for Order with us!, your Order is now Placed Sucessfully...');
								window.location.href='menu.php';
								</script>
								";
							
								
							}
							else
							{
								echo '<div class="errormsgbox">oops! Error Occured in Order, Try again after sometime...</div>';
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
			                 <label class="sr-only" for="contact-subject">Address</label>
			                 <textarea name="address" class="contact-subject form-control" id="contact-subject" required placeholder="Enter Delivery Address" ></textarea>
			               </div>
                           
                          
                          
                           
			               <div class="form-group">
			                  <label class="sr-only" for="contact-message">Product</label>
			                  <select name="select" class="contact-message form-control" id="contact-message" required>
							  <option>Select Product</option>
							  
							  <?php $sql=mysqli_query($con,"select * from menu ");
							  
							  while($res=mysqli_fetch_array($sql))
							 {
							 ?>
							  <option><?php echo $res['i_name'];?></option>
							 <?php }?>
							  </select>
			               </div>
			                  <input type="submit" name="order" value="Book Now!" class="btn" style="float:left"/>
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

