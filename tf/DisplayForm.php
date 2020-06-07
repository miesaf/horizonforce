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



  <table width="212">
    <?php foreach($result as $user)
    {
    	$question_id = $user['question_id'];
    	$thequestion = $user['thequestion'];
    ?>
      <tr>
        <td width="20" align="center"><?php echo $question_id; ?></td>
        <td><?php echo $thequestion; ?></td>
      </tr>
    <?php
    }
    ?>


    <?php foreach($result as $user)
    {
      $question_id = $user['question_id'];
      $theanswer = $user['theanswer'];
    ?>
      <td>
        <input type="radio" class="form-check-inline" name="theanswer" value=<?php 0 ?> >0</input>
        <input type="radio" class="form-check-inline" name="theanswer">1</input>
        <input type="radio" class="form-check-inline" name="theanswer">2</input>
        <input type="radio" class="form-check-inline" name="theanswer">3</input>
        <input type="radio" class="form-check-inline" name="theanswer">4</input>
        <input type="radio" class="form-check-inline" name="theanswer">5</input>
      </td>
    <?php
    }
    ?>

  

</table>

</body>
</html>