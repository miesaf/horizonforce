<?php
	include_once('dbconnect.php');

	$query = "UPDATE staff SET staff_password='$_POST[pass]',staff_email='$_POST[email]',address='$_POST[address]',postcode='$_POST[postcode]',state='$_POST[state]',phone_no='$_POST[phoneno]',dept='$_POST[dept]',designation='$_POST[designation]' WHERE staff_id='$_POST[id]'";

		if(mysql_query($query))
		  header("refresh:1; url=UpdateDetail.php");
		else
		  echo "Failed To Update Staff Detail.";
?>
