<?php 
    session_start();
    $count = 1;
	if(isset($_SESSION['LastLogin'])){
        $count = 0;
    }else{
        $count = $_SESSION['LastLogin'] = 1;
    }
	$conn = mysqli_connect("localhost", "root", "","mediportal_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); 
	}
	if(isset($_SESSION['patient_username']) && isset($_SESSION['patient_type'])) {
		$member_information = "SELECT * from member where username = '".$_SESSION['patient_username']."';";
		$result = mysqli_query($conn, $member_information)or die(mysqli_error($conn)); 
    }else
	{
		header("Location:../login.php");
		exit;
	}
    $arr=array();
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			$arr =array(
				"username"=>$row['username'],
				"member_id"=>$row['member_id'],
				"last_login"=>$row['last_login'],						
				);}
//$pending
	$sql1="SELECT COUNT(*) AS total FROM `appointment` WHERE `status`='pending' AND `member_id`=".$arr['member_id']."";
	$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn)); 
		
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			
				$pending=$row['total'];
											
							
		}
//accepted
	$sql1="SELECT COUNT(*) AS total FROM `appointment` WHERE `status`='accepted' AND `member_id`=".$arr['member_id']."";
	$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn)); 
		
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			
				$accepted=$row['total'];
											
							
		}
//rejected
	$sql1="SELECT COUNT(*) AS total FROM `appointment` WHERE `status`='rejected' AND `member_id`=".$arr['member_id']."";
	$result = mysqli_query($conn, $sql1)or die(mysqli_error($conn)); 
		
	
		while(($row = mysqli_fetch_assoc($result))!=null){ 
			
				$rejected=$row['total'];
											
							
		}


	if($count==1){
		$currentDateTime = date('Y-m-d H:i:s');	
		$sql="UPDATE `member` SET `last_login`='".$currentDateTime."' WHERE `username`='".$arr['username']."'";
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		$count=2;
	}

 ?>
<html>

<head><title>Dashboard</title></head>

<body>
	<table border="0" align="center" width="100%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <a href="dashboard.php"><img src="../user_member/images/pageicon.png"/></a>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="../user_member/viewprofile.php"><?=$_SESSION['patient_username']?><img src="../user_member/images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                 <td><a href="../Registration/DonorSubscription.php">Profile</a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.php">Logout<img src="../user_member/images/logout.png"></a></td>

                            </table> 
                        </td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Body section -->
               <div>
                    <table border="1" width="100%">
                        <!-- User Menu Section -->
                        <td width="20%" valign="top">
                            <fieldset>
                                <legend>
                            <strong>Personal Information</strong></legend>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.php">View Profile</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Medical History</strong></legend>
                                <ul>
                                <li><a href="prevpescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="newappointment.php">New Appointment</a></li>
                                <li><a href="appointmentstatus.php">Appointment Status</a></li>
                            </ul>
                        </fieldset>
                        <fieldset>
                            <legend>
                            <strong>Account</strong></legend>
                           
                            <ul>
                                <li><a href="changepassword.php">Change Password</a></li>
                                <li><a href="../index.php">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <div align="center">
							<td width="70%" align="center"> 
                            <h1>Last Week you have suffered in fever. This week you are ok?? If not ok get an appointment now.Click here</h1>   
                                <h2><img src="images/default.png"/><br/>
                                <h2>Welcome,<a href="viewprofile.php"><?=$_SESSION['patient_username']?></a></h2>  
                                <strong>Last login :<?=  $arr['last_login']; ?></strong>
                                <table width="80%">
                                    <tr>
                                        
                                        <td align="center" width="35%"">
                                            <fieldset>
                                                <h2 align="center">Appointment accepted today</h2></br>
                                                <h1 align="center"><a href="appointmentstatus.php"><?=$accepted?></a></h1>
                                                <h4 align="center"><b>See Appointment Status</b></h4>
                                        </fieldset>
                                    </td>
                                        <td align="center" width="35%">
                                              <fieldset>
                                                <h2 align="center">Appointment still pending</h2></br>
                                                <h1 align="center"><a href="appointmentstatus.php"><?=$pending?></a></h1>
                                                <h4 align="center"><b>Check Appointment Status</b></h4>
                                        </fieldset>
                                    </td>
                                    <td align="center" width="35%">
                                              <fieldset>
                                                <h2 align="center">Appointment was rejected</h2></br>
                                                <h1 align="center"><a href="appointmentstatus.php"><?=$rejected?></a></h1>
                                                <h4 align="center"><b>Check Appointment Status</b></h4>
                                        </fieldset>
                                    </td>
                                    </tr> 
                                </table>
                            </td>
						</div>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Footer section -->
                <div>
                    <table align="center">
                        <td>2018 MediPortal@All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>