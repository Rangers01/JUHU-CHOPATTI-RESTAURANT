<style type="text/css">
.b {
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #993300;
}
.style2, .style4 {
	color:#C30;
	font-weight: bold;
	width:100%;
	font-size:16px;
	line-height:30px;
	position:relative;
}
.style3 {
	color:#666;
	font-weight: bold;
	font-size:16px;
	line-height:30px;
	position:relative;
}
.menu{ float:left;width:275px;border:5px solid orange; margin:0 10px 50px 0; display:block; position:relative;}
@media (max-width: 600px) {
.style4 {
	display:none;
}
}
-->
</style>
<body class="menuclass">
<div class="bg img-responsive"></div>
<!--Header Container Start-->
<?php include ("header.php"); ?>
<script type="text/javascript">
           function filter(genm){
            $.ajax({
            url: "menu-filter.php",
            data:'genm='+genm,
            type: "GET",
            success: function(data){  
            $('#catfilter').html(data);
       
           }
          });   
         } 
		 </script>
<!--Header Container End-->
<!--Strip -->
<divCode Start class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="strip">
        <p>MENU</p>
        <br>
        <ul>
        	<li><a href="javascript:filter('North')">North</a></li>
        	<li><a href="javascript:filter('South')">West</li>
        	<li><a href="javascript:filter('West')">South</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--Strip code end-->

<div class="container">
  <div class="row" id="catfilter">
    <?php
   include('connect.php');
   $sql=mysqli_query($con,"select * from menu");
   while($arr=mysqli_fetch_array($sql))
     {
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
	  ?>
  </div>
</div>
<?php include ("footer.php"); ?>
