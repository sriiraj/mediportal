<?php 
    session_start();

     $conn = mysqli_connect("localhost", "root", "","mediportal_db");
   
             if (!$conn) {
         die("Connection failed: " . mysqli_connect_error()); 
  }
 if(isset($_SESSION['patient_username']) && isset($_SESSION['patient_type'])) {
    $member_information = "SELECT * from member where member_id=".$_REQUEST['mid'].";";
     $result = mysqli_query($conn, $member_information)or die(mysqli_error($conn)); 
     
  }
      while($row = mysqli_fetch_assoc($result)) {
          $patient_username =$row['patient_username'];
          return $patient_username;
      }
  ?>
<html>

<head><title>Paitent Details</title></head>

<body>
    <table align="center" width="100%">
        <tr>
            <td>
                <!-- Header section -->
                <div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <a href="dashboard.php"><img src="images/pageicon.png"/></a>
                        </td>
                        <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.php"><?php echo $_SESSION['doctor_username']; ?><img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../Registration/DocRegAddEducation.php">Profile</a></td>
                                                                 <td><hr width="1" size="15"></td>
                                <td><a href="../index.php">Logout<img src="images/logout.png"></a></td>
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
                    <table width="100%" border="1">
                        <!-- User Menu Section -->
                        <td width="20%">
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
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="newpescriptions.php">Create new Prescriptions</a></li>
                                <li><a href="pescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="appointmentstatus.php">Appointment Status</a></li>
                                <li><a href="appointmenthistory.php">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="patienthistory.php">Patient History</a></li>
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
                             <td width="70%" align="center" valign="top">

                                <h1 align="center">Patient Details</h1>
                                <div>
                                        <h1>PROFILE</h1>
                                           <table width="100%">
                                        <td width="60%">
                                            <fieldset>

                                            <table width="100%">
                                                <tr align="center">
                                                    <td width="40%" align="center" colspan="3">
                                            <table align="center">
                                                <tr>
                                                    <td align="center"><img src="images/default.png"/></td>
                                                </tr>
                                            </table>
                                        </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td width="10%" valign="top"><label><b><i>General Information:</i></b></label>
                                                    </td>
                                                    <td align="center">
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><?php echo $row['name'];?></td>
                                                        </tr>

                                                      
                                                         
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Gender</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><?php echo $row['gender'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%"><strong>User Name</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td ><?php echo $row['username'];?></td>
                                                        </tr>
                                                        
                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>
                                                 


                                                 <tr>
                                                    <td width="10%" valign="top"><label><b><i>Blood Donation Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Blood Group</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%">A+</td>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Weight</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>Over 50 Kg</td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Heart Condition</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>Good</td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Injected Drugs</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td>No</td>
                                                         </tr>
                                                         
                                                        

                                                    </table>
                                                </fieldset>
                                                </td>
                                            </tr>


                                                  <tr>
                                                    <td width="10%" valign="top"><label><b><i>Others Information:</i></b></label>
                                                    </td>
                                                    <td>
                                                        <fieldset>
                                                        <table width="100%">
                                                        <tr>
                                                            <td width="30%"><strong>Date Of Birth</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td width="65%"><?php echo $row['dob'];?></td>
                                                        </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Mobile Number</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $row['mobile'];?></td>
                                                         </tr>

                                                         <tr>
                                                            
                                                            <td width="30%"><strong>Email</strong></td>
                                                            <td><strong>:</strong></td>
                                                            <td><?php echo $row['email'];?></td>
                                                         </tr>
                                                    </table>
                                          <?php 
                                          mysqli_close($conn) ?>
                                                       
                                                </fieldset>
                                                </td>
                                            </tr>

                                        </td>
                                        
                                    </table>

                                                </tr>
                                               <script type="text/javascript">
                                                    function goBack(){
                                                        window.history.back();
                                                    }
                                                </script>
                                                <tr>
                                                    <td align="center">
                                                        <button onclick="goBack()">Go Back</button> | <button>Report this user</button>
                                                    </td>
                                                </tr>
                                            </table>
                                    </div>

                                
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
                        <td>&copy;2018 MediPortal@All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>