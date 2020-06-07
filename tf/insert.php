<?php
  include_once('dbconnect.php');

  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "trainingform";
     
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) 
    {
      die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else 
    {
       $SELECT = "SELECT staff_id From staff Where staff_id = ? Limit 1";
       $INSERT = "INSERT Into staff SET staff_id='$_POST[staff_id]',staff_name='$_POST[staff_name]', ic_num='$_POST[ic_num]', date_of_birth='$_POST[date_of_birth]', gender='$_POST[gender]', staff_password='$_POST[staff_password]',staff_email='$_POST[staff_email]',address='$_POST[address]',postcode='$_POST[postcode]',state='$_POST[state]',phone_no='$_POST[phone_no]',dept='$_POST[dept]',designation='$_POST[designation]', date_of_hire='$_POST[date_of_hire]'";
       //Prepare statement
       $stmt = $conn->prepare($SELECT);
       $stmt->bind_param("s", $staff_id);
       $stmt->execute();
       $stmt->bind_result($staff_id);
       $stmt->store_result();
       $rnum = $stmt->num_rows;
         if ($rnum==0) 
         {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->execute();
            
           $stmt->close();
           $conn->close();
           header("refresh:1; url=AddDetail.php");
         }
         else 
         {
            echo "Someone already register using this email";
            $stmt->close();
            $conn->close();
            header("refresh:1; url=AddDetail.php");
         }
      }
?>
