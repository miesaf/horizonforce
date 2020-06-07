<?php 
include 'dbconnect.php';
           //assign textbox to variable
$count= count($_POST['question_id']);
for($i=0; $i<$count; $i++)
{
	$add_answer=$_POST['theanswer'][$i]; 
	$add_questionid=$_POST['question_id'][$i]; 
	$add_staffid=$_POST['staff_id']; 
	$query= "INSERT INTO answer(question_id,staff_id,theanswer) VALUES ('$add_questionid','$add_staffid','$add_answer')" ;		
	$result = mysqli_query( $link,$query) or die("Query failed");
	if (!$result)
	{
		echo " Problem occured !";
		
	}
	 
	//else
	//{
	//	echo "Problem occured !"; 
	//}

}
	// SQL statement for checking
 //checking either success or not
//header("refresh:1; url=test.php");


mysqli_close($link);
?>
