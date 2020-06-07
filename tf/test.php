<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="TEXT/html; charset=utf-8" />
<title>ATSB Training Form</title>
</head>

<body>
  <?php 
    include 'dbconnect.php';
        
    //$form_id=$_GET['form_id']; 
	  $query="SELECT * FROM  question WHERE form_id='TE1'";
	  $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
  ?>

<form action=addAnswer.php method="post">
  	<table class="table">
  		<tr><td>Staff Id:</td>
        	<td>
        		<input type="text" name="staff_id">
        	</td>
    	</tr>

    	<table>
	    	<?php 
	        	foreach($result as $user)
	        	{
	          		echo"<form action=addAnswer.php method='post'>";
	        		$question_id = $user['question_id'];
	        		$thequestion = $user['thequestion'];
	         		$ques_type = $user['question_type'];

	         		echo"<input type='hidden' name='question_id[]' value='$question_id'>";

	        		$code = substr($ques_type, 0, 1);

	        		echo"<tr>";
	        		echo"<td width='500'> $thequestion </td>";

	        		if($code == 'A')
	        		{
	        			echo"<td>";
	        			echo"<form action=addAnswer.php method='post'>";
					    echo"<input type='radio' name='theanswer[]' value='0'>0";
						echo"<input type='radio' name='theanswer[]' value='1'>1";
						echo"<input type='radio' name='theanswer[]' value='2'>2";
						echo"<input type='radio' name='theanswer[]' value='3'>3";
						echo"<input type='radio' name='theanswer[]' value='4'>4";
						echo"<input type='radio' name='theanswer[]' value='5'>5";
						echo"<form action=addAnswer.php method='post'>";
	        			echo"</td>";
	        		}
	        		else if($code == 'B')
	        		{
	        			echo"<td>";
	        			echo"<form action=addAnswer.php method='post'>";
	        			echo"<input type='text' name='theanswer[]'>";
	        			echo"<form action=addAnswer.php method='post'>";
	        			echo"</td>";
	        		}
	        		else
	        		{
	        			echo"<td>";
	        			echo"<form action=addAnswer.php method='post'>";
					    echo"<input type='radio' name='theanswer[]' value='Yes'>Yes";
						echo"<input type='radio' name='theanswer[]' value='No'>No";
						echo"</form>";
	        			echo"</td>";
	        		}

	        		echo"</form>";
	        		echo"</tr>";
	        	}
			?>
    	</table>
		
	</table>
    <input type="submit" name="submit" value="Submit">
     	
</form> 
</body>
</html>