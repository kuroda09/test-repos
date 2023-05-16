<?php  
session_start();  
include ('db.php');
include_once '../classes/Booking.php';
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
if(!isset($_GET["rid"]))
	{
		header("location:index.php");
	} else {
		$curdate=date("Y/m/d");
		$id = $_GET['rid'];
		$book = new Booking($id);
	}
?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

				    <li>
                        <a  href="dashboard.php"><i class="fa fa-user fa-fw"></i>DASHBOARD</a>
                    </li>

                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
					<li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
						
					<form method="post">
						<div class="panel panel-info">
							<div class="panel-heading">
							Booking Conformation
							</div>
							<div class="panel-body">
								
								<div class="table-responsive">
									<table class="table">
										<tr>
												<th>DESCRIPTION</th>
												<th>INFORMATION</th>
												
											</tr>
											<tr>
												<th>First Name</th>
												<th><input type="text" name="Fname" class="form-control" value="<?php echo $book->FName; ?>" id="Fname"></th>
												
											</tr>
											<tr>
												<th>Last Name</th>
												<th><input type="text"  name="LName" class="form-control" value="<?php echo $book->LName; ?>" id="LName"></th>
												
											</tr>
											<tr>
												<th>Email</th>
												<th><input type="text"  name="Email" class="form-control" value="<?php echo $book->Email; ?>" id="Email"></th>
												
											</tr>
											<tr>
												<th>Nationality </th>
												<th><input  type="text" name="National" class="form-control" value="<?php echo $book->National; ?>" id="National"></th>
												
											</tr>
											<tr>
												<th>Country </th>
												<th><input type="text" name="Country" class="form-control" value="<?php echo $book->Country; ?>" id="Country"></th>
												
											</tr>
											<tr>
												<th>Phone No </th>
												<th><input type="text" name="Phone" class="form-control" value="<?php echo $book->Phone; ?>" id="Phone"></th>
												
											</tr>
											<tr>
												<th>Type Of the Room </th>
												<th>
													<select name="TRoom" class="form-control" required="">
														<option <?php if($book->TRoom == 'Superior Room'){echo 'selected="selected"';}?> value="Superior Room">SUPERIOR ROOM</option>
														<option <?php if($book->TRoom == 'Deluxe Room'){echo 'selected="selected"';}?> value="Deluxe Room">DELUXE ROOM</option>
														<option <?php if($book->TRoom == 'Guest Room'){echo 'selected="selected"';}?> value="Guest House">GUEST HOUSE</option>
														<option <?php if($book->TRoom == 'Single Room'){echo 'selected="selected"';}?> value="Single Room">SINGLE ROOM</option>
													</select>
												</th>
												
											</tr>
											<tr>
												<th>No Of the Room </th>
												<th>
													<select name="NRoom" id="NRoom" class="form-control">
														<?php for($i=0;$i <= 5; $i++):?>
															<option <?php if($book->NRoom == $i){echo 'selected="selected"';}?> value="<?php echo $i;?>"><?php echo $i;?></option>
														<?php endfor;?>
													</select>
												</th>
												
											</tr>
											<tr>
												<th>Meal Plan </th>
												<th>
													<select name="Meal" class="form-control" required="">
														<option value="Room only" <?php if($book->Meal == 'Room only'){echo 'selected="selected"';}?>>Room only</option>
														<option value="Breakfast" <?php if($book->Meal == 'Breakfast'){echo 'selected="selected"';}?>>Breakfast</option>
														<option value="Half Board" <?php if($book->Meal == 'Lunch'){echo 'selected="selected"';}?>>Lunch</option>
														<option value="Full Board" <?php if($book->Meal == 'Dinner'){echo 'selected="selected"';}?>>Dinner</option>
														<option value="Full Board" <?php if($book->Meal == 'All in One'){echo 'selected="selected"';}?>>All in One</option>
													</select>
												</th>
												
											</tr>
											<tr>
												<th>Bedding </th>
												<th>
													<select name="Bed" class="form-control" required="">
														<option value="None" <?php if($book->Bed == 'None'){echo 'selected="selected"';}?>>None</option>
														<option value="Single" <?php if($book->Bed == 'Single'){echo 'selected="selected"';}?>>Single</option>
														<option value="Double" <?php if($book->Bed == 'Double'){echo 'selected="selected"';}?>>Double</option>
													</select>
												</th>
												
											</tr>
											<tr>
												<th>Check-in Date </th>
												<th><input type="date" name="cin" class="form-control" value="<?php echo $book->cin; ?>" id="cin"></th>
												
											</tr>
											<tr>
												<th>Check-out Date</th>
												<th><input type="date" name="cout" class="form-control" value="<?php echo $book->cout; ?>" id="cout"></th>
												
											</tr>
											<tr>
												<th>No of days</th>
												<th><input name="nodays" class="form-control" value="<?php echo $book->nodays; ?>" id="nodays"></th>
												
											</tr>
											<tr>
												<th>Status Level</th>
												<th><?php echo $book->stat; ?></th>
												
											</tr>
									
									
											
											
										
									</table>
								</div>
							
						
								
							</div>
							<div class="panel-footer">
											<div class="form-group">
															<label>Select the Conformation</label>
															<select name="conf"class="form-control">
																<option value selected>---</option>
																<option value="Confirmed">Confirm</option>
																<option value="Canceled">Cancel</option>
																
																
															</select>
											</div>
								<input type="submit" name="co" value="Confirm" class="btn btn-success">
								
							</div>
						</div>
					</form>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre = DB::_query($rsql);
						// $rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Superior Room" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="Guest House")
							{
								$gh = $gh + 1;
							}
							if($s=="Single Room" )
							{
								$sr = $sr + 1;
							}
							if($s=="Deluxe Room" )
							{
								$dr = $dr + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre = DB::_query($csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="Superior Room"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="Guest House" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="Single Room" )
							{
								$csr = $csr + 1;
							}
							if($cs=="Deluxe Room" )
							{
								$cdr = $cdr + 1;
							}
							
						
						}
				
					?>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Available Room Details
                        </div>
                        <div class="panel-body">
						<table width="200px">
							
							<tr>
								<td><b>Superior Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php  
									$f1 =$sc - $csc;
									if($f1 <=0 )
									{	$f1 = "NO";
										echo $f1;
									}
									else{
											echo $f1;
									}
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Guest House</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								$f2 =  $gh -$cgh;
								if($f2 <=0 )
									{	$f2 = "NO";
										echo $f2;
									}
									else{
											echo $f2;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Single Room	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php
								$f3 =$sr - $csr;
								if($f3 <=0 )
									{	$f3 = "NO";
										echo $f3;
									}
									else{
											echo $f3;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Deluxe Room</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								
								$f4 =$dr - $cdr; 
								if($f4 <=0 )
									{	$f4 = "NO";
										echo $f4;
									}
									else{
											echo $f4;
									}
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 
								
								$f5 =$r-$cr; 
								if($f5 <=0 )
									{	$f5 = "NO";
										echo $f5;
									}
									else{
											echo $f5;
									}
								 ?> </button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$fname = $_POST['Fname'];
							$lname = $_POST['LName'];
							$troom = $_POST['TRoom'];
							$bed = $_POST['Bed'];
							$nroom = $_POST['NRoom'];
							$cin = $_POST['cin'];
							$cout = $_POST['cout'];
							$meal = $_POST['Meal'];
							$days = $_POST['nodays'];
							$Email = $_POST['Email'];
							$National = $_POST['National'];
							$Country = $_POST['Country'];
							$Phone = $_POST['Phone'];
							// update record in database
							$updaterecordsql = "
								UPDATE roombook 
								SET Fname = '{$fname}',
								LName = '{$lname}',
								TRoom = '{$troom}',
								Bed = '{$bed}',
								NRoom = '{$nroom}',
								cin = '{$cin}',
								cout = '{$cout}',
								Meal = '{$meal}',
								nodays = '{$days}',
								Email = '{$Email}',
								National = '{$National}',
								Country = '{$Country}',
								Phone = {$Phone}
								WHERE id = $book->id
							";
							$updateRecord = DB::_query($updaterecordsql);

							$st = $_POST['conf'];
							if($st=="Confirmed")
							{
								$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";
								if($f1=="NO" ) {
									echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
								} else if($f2 =="NO") {
									echo "<script type='text/javascript'> alert('Sorry! Not Available Guest House')</script>";
									
								} else if ($f3 == "NO") {
									echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
								} else if($f4=="NO") {
									echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
								} else if( DB::_query($urb)) {	
									//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
									//echo "<script type='text/javascript'> window.location='home.php'</script>";
								$type_of_room = 0;  
									if($book->TRoom=="Superior Room")
									{
										$type_of_room = 320;
									
									}
									else if($book->TRoom=="Deluxe Room")
									{
										$type_of_room = 220;
									}
									else if($book->TRoom=="Guest House")
									{
										$type_of_room = 180;
									}
									else if($book->TRoom=="Single Room")
									{
										$type_of_room = 150;
									}
									
									
									
									
									if($book->Bed=="Single")
									{
										$type_of_bed = $type_of_room * 1/100;
									}
									else if($book->Bed=="Double")
									{
										$type_of_bed = $type_of_room * 2/100;
									}
									else if($book->Bed=="Triple")
									{
										$type_of_bed = $type_of_room * 3/100;
									}
									else if($book->Bed=="Quad")
									{
										$type_of_bed = $type_of_room * 4/100;
									}
									else if($book->Bed=="None")
									{
										$type_of_bed = $type_of_room * 0/100;
									}
									
									
									if($book->Meal=="Room only")
									{
										$type_of_meal=$type_of_bed * 0;
									}
									else if($book->Meal=="Breakfast")
									{
										$type_of_meal=$type_of_bed * 2;
									}else if($book->Meal=="Half Board")
									{
										$type_of_meal=$type_of_bed * 3;
									
									}else if($book->Meal=="Full Board")
									{
										$type_of_meal=$type_of_bed * 4;
									}
									
									
									$ttot = $type_of_room * $book->nodays * $book->NRoom;
									$mepr = $type_of_meal * $book->nodays;
									$btot = $type_of_bed *$book->nodays;
									
									$fintot = $ttot + $mepr + $btot ;
										
									// check for existing record
									$checkDb = "SELECT * FROM payment WHERE id = $id";
									if($checkDb){
										$psql = "
											UPDATE payment
											SET fname = '{$fname}',
											lname = '{$lname}',
											troom = '{$troom}',
											tbed = '{$bed}',
											nroom = '{$nroom}',
											cin = '{$cin}',
											cout = '{$cout}',
											ttot = '{$ttot}',
											meal = '{$meal}',
											mepr = '{$mepr}',
											btot = '{$btot}',
											fintot = '{$fintot}',
											noofdays = {$days}
											WHERE id = $book->id
										";
									}
									else {
										$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$book->Title','$fname','$lname','$troom','$bed','$nroom','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";
									}
									
									if(DB::_query($psql))
									{	$notfree="NotFree";
										$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$troom' ";
										if(DB::_query($rpsql))
										{
										echo "<script type='text/javascript'> alert('Booking Conform')</script>";
										echo "<script type='text/javascript'> window.location='roombook.php'</script>";
										}
										
										
									}
									
								}
									
                                        
							}	else {
								echo "<script type='text/javascript'> window.location='roombook.php?rid=".$book->id."'</script>";
							}
					
						}
					
									
									
							
						?>