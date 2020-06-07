<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="TEXT/html; charset=utf-8" />
<title>ATSB Training Form</title>
</head>

<body>
<form action="editForm.php" method="post">
  <?php 
    include 'dbconnect.php';
        
    $form_id=$_GET['form_id']; 
	  $query="SELECT * FROM  question WHERE form_id='$form_id'";
	  $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking               	
  ?>

<table width="212" border="1">
  <?php foreach($result as $user)
  {
  	$question_id = $user['question_id'];
  	$thequestion = $user['thequestion'];
  }
  ?>

  <tr>
    <td><?php echo $question_id; ?></td>
    <td><?php $thequestion; ?></td>
  </tr>
</table>

  




  <tr>
    <td width="75"><?php echo $</td>
    <td width="121"><?php echo $staff_id; ?></td>
  </tr>

  <tr>
    <td><strong>STAFF NAME</strong></td>
    <td><?php echo $staff_name; ?></td>
  </tr>

  <tr>
    <td><strong>I/C NUMBER</strong></td>
    <td><?php echo $ic_num; ?></td>
  </tr>

  <tr>
    <td><strong>DATE OF BIRTH</strong></td>
    <td><?php echo $date_of_birth; ?></td>
  </tr>

  <tr>
    <td><strong>GENDER</strong></td>
    <td><?php echo $gender ?></td>
  </tr>

  <tr>
    <td><strong>PASSWORD</strong></td>
    <td><input name="staff_password" type="TEXT" value="<?php echo $staff_password ?>"></td>
  </tr>

  <tr>
    <td><strong>EMAIL</strong></td>
    <td><input name="staff_email" type="EMAIL" value="<?php echo $address ?>"></td>
  </tr>

  <tr>
    <td><strong>ADDRESS</strong></td>
    <td><input name="address" type="TEXT" value="<?php echo $address ?>"></td>
  </tr>

  <tr>
    <td><strong>POSTCODE</strong></td>
    <td><input name="postcode" type="NUMBER" value="<?php echo $postcode ?>"></td>
  </tr>

  <tr>
    <td><strong>STATE</strong></td>
    <td>
      <select name="state">
        <option value="<?php echo $state ?>"
      </select></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit">
    </div></td>
  </tr>
  
</table>
</form>

</body>
</html>