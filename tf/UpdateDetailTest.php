<?php
  include_once('dbconnect.php');
  $query = "SELECT * FROM staff";
  $result = mysql_query($query);
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
  <title>ATSB Training Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="number/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style media="screen"> 
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button{
           -webkit-appearance:none;
    }
    input[type="number"]{
      -moz-appearance:textfield;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </nav>

  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="PAGE SEBELUM NI"> < Back </a></li>
  </ul>

  <div class="container">
    <table class="table table-dark table-borderless table-sm">
      <thead>
        <tr>
          <th>
            <h4><center>Training Form Evaluation</h4>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> 
            <div class="container">
             <div class="jumbotron text-body font-weight-bold">
               
                <?php
                  while($rows = mysql_fetch_assoc($result))
                    {
                ?>
              
                <table>
                  <tbody>
                    <tr>
                      <td>STAFF ID</td>
                      <td>: <?php echo $rows['question_id']; ?></td>
                    </tr>

                    <tr>
                      <td>NAME</td>
                      <td>: <?php echo $rows['staff_name']; ?></td>
                    </tr>
                  </tbody>

                  <table class="table table-white table-borderless table-sm">
                  
                  </table>
                  
                </table>

                

                    <tr>
                      <td>PROGRAM NAME</td>
                      <td>: <?php echo $rows['ic_num']; ?></td>
                    </tr>

                    <tr>
                      <td>DATE OF BIRTH</td>
                      <td>: <?php echo $rows['date_of_birth']; ?></td>
                    </tr>

                    <tr>
                      <td>GENDER</td>
                      <td>: <?php echo $rows['gender']; ?></td>
                    </tr>

                    <tr>
                      <td>PASSWORD</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        :
                        <?php
                              echo "<input type=text style=width:200px; name=pass value='".$rows['staff_password']."'";
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>EMAIL</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        : 
                        <?php 
                            echo "<input type=email style=width:200px; name=email value='".$rows['staff_email']."'";
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>ADDRESS</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        :
                        <?php 
                            echo "<input type=text class=form style=width:200px; name=address value='".$rows['address']."'";
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>POSTCODE</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        :
                        <?php 
                            echo "<input type=number style=width:200px; name=postcode value='".$rows['postcode']."'";
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>STATE</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        :
                        <select name=state>
                          
                          <option value="Johor" 
                          <?php 
                            if($rows['state']=='Johor')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Johor</option>

                          <option value="Kedah" 
                          <?php 
                            if($rows['state']=='Kedah')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Kedah</option>

                          <option value="Kelantan" 
                          <?php 
                            if($rows['state']=='Kelantan')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Kelantan</option>

                          <option value="Melaka" 
                          <?php 
                            if($rows['state']=='Melaka')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Melaka</option>

                          <option value="Negeri Sembilan" 
                          <?php 
                            if($rows['state']=='Negeri Sembilan')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Negeri Sembilan</option>

                          <option value="Pahang" 
                          <?php 
                            if($rows['state']=='Pahang')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Pahang</option>

                          <option value="Pulau Pinang" 
                          <?php 
                            if($rows['state']=='Pulau Pinang')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Pulau Pinang</option>

                          <option value="Perak" 
                          <?php 
                            if($rows['state']=='Perak')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Perak</option>

                          <option value="Perlis" 
                          <?php 
                            if($rows['state']=='Perlis')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Perlis</option>

                          <option value="Sabah" 
                          <?php 
                            if($rows['state']=='Sabah')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Sabah</option>

                          <option value="Sarawak" 
                          <?php 
                            if($rows['state']=='Sarawak')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Sarawak</option>

                          <option value="Selangor" 
                          <?php 
                            if($rows['state']=='Selangor')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Selangor</option>

                          <option value="Terengganu" 
                          <?php 
                            if($rows['state']=='Terengganu')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Terengganu</option>

                          <option value="W. P. Kuala Lumpur" 
                          <?php 
                            if($rows['state']=='W. P. Kuala Lumpur')
                              {
                                echo "Selected";
                              }
                              ?>
                          >W. P. Kuala Lumpur</option>

                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td>PHONE NUMBER</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        :
                        <?php 
                            echo "<input type=number style=width:200px; name=phoneno value='".$rows['phone_no']."'";
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>DEPARTMENT</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        :
                        <select name=dept>
                          
                          <option value="Department 1" 
                          <?php 
                            if($rows['state']=='Department 1')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Department 1</option>

                          <option value="Department 2" 
                          <?php 
                            if($rows['state']=='Department 2')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Department 2</option>

                          <option value="Department 3" 
                          <?php 
                            if($rows['state']=='Department 3')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Department 3</option>

                          <option value="Department 4" 
                          <?php 
                            if($rows['state']=='Department 4')
                              {
                                echo "Selected";
                              }
                              ?>
                          >Department 4</option>
                        </select>

                    <tr>
                      <td>DESIGNATION</td>
                      <td><?php echo "<form action=edit.php method=post>"; ?>
                        :
                        <?php 
                            echo "<input type=text style=width:200px; name=designation value='".$rows['designation']."'";
                        ?>
                      </td>
                    </tr>

                    <tr>
                      <td>DATE OF HIRE</td>
                      <td>: <?php echo $rows['date_of_hire']; ?></td>
                    </tr>       
                  </tbody>
              </table>
                  <?php
                      echo "<input type=hidden name=id value='".$rows['staff_id']."'";
                  ?>

                  <div>
                    <br>
                      <?php
                         echo"<center><button class='btn btn-dark' <input type=submit>Save Details</button>";
                         echo"</form>";
                      ?>
                    </br>
                  </div>
                 
                 <?php 
                    } //'}' for while loop in line 60
                 ?>
              
            </div> 
              
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
