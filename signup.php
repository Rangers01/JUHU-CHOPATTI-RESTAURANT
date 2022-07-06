<?php include ("header.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="register">
        <form action="" method="post">
          <h3>REGISTER TO <span style="color: #E24E2A;"><strong>MINI RESTAURANT</strong></span></h3>
          <?php
						 include('connect.php');
						 if(isset($_POST['Signup']))
						 {
							
							$fname=$_REQUEST['firstname'];
							$lname=$_REQUEST['lastname'];
							$email=$_REQUEST['email'];
							$mobile=$_REQUEST['mobile'];
							$pass=$_REQUEST['password'];
							$sql = mysqli_query($con,"SELECT * FROM register_users WHERE email = '$email'");
							$row = mysqli_fetch_row($sql);
							if(is_array($row)){
							  echo '<div class="errormsgbox"> Email is Already Registered! Try Another Email</div>';
							}
							else
							{ 
							$sql1="insert into register_users (firstname ,lastname ,email, mobile, password,
							 Registration_date)values('$fname', '$lname', '$email','$mobile','$pass',Now())";
							$res=mysqli_query($con,$sql1);
							if($res>=1)
							{
								
								echo '<div class="success">Thank you for
								registering with us!, you may now Login </div>';
							}
							else
							{
								echo '<div class="errormsgbox"> Error Occured in Registration!</div>';
							}
						  }
						 }
						 
					   ?>
          <label for="firstname">First Name *</label>
          <br/>
          <input type="text" id="firstname" name="firstname" placeholder="enter your first name..." required="required">
          <br/>
          <label for="lastname">Last Name *</label>
          <br/>
          <input type="text" id="lastname" name="lastname" placeholder="enter your first name..." required="required">
          <br/>
          <label for="email">Email *</label>
          <br/>
          <input type="text" id="email" name="email" placeholder="enter your email..." required="required">
          <br/>
          <label for="mobile">Mobile no. *</label>
          <br/>
          <input type="text" id="mobile" name="mobile" placeholder="enter your mobile no...." required="required">
          <br/>
          <label for="password">Password *</label>
          <br/>
          <input type="password" id="password" name="password" placeholder="enter your password..." required="required">
          <br/>
          <br/>
          <br/>
          <input class="btn btn-block" name="Signup" type="submit" id="signup" value="SignUp Now!"/>
        </form>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
<?php include ("footer.php"); ?>