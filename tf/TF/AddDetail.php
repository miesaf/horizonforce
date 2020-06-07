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
      <span class="navbar-text">
          Administrator |
      </span>
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
            <h4><center>Add Staff Details</h4>
          </th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td> 
            <div class="container">
             <div class="jumbotron text-body font-weight-bold">
                          
              <table>
                  <tbody>
                    <tr>
                      <td>STAFF ID</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :  
                          <input type=text style=width:200px; name=staff_id required>
                      </td>
                    </tr>

                    <tr>
                      <td>NAME</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=text style=width:500px; name=staff_name required>
                      </td>
                    </tr>

                    <tr>
                      <td>I/C NUMBER</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=text style=width:200px; name=ic_num required>
                        <div>
                          <small class="text-body font-weight-light">
                           &nbsp&nbspNote: Please include "-"
                          </small>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>DATE OF BIRTH</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=date style=width:150px; name=date_of_birth required></input>
                      </td>
                    </tr>

                    <tr>
                      <td>GENDER</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Male" required>Male
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Female">Female
                          </label>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>PASSWORD</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=text style=width:200px; name=staff_password required>
                      </td>
                    </tr>

                    <tr>
                      <td>EMAIL</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        : 
                          <input type=email style=width:200px; name=staff_email required>
                      </td>
                    </tr>

                    <tr>
                      <td>ADDRESS</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=text style=width:500px; name=address required>
                      </td>
                    </tr>

                    <tr>
                      <td>POSTCODE</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=number style=width:100px; name=postcode required>
                      </td>
                    </tr>

                    <tr>
                      <td>STATE</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                        <select style=width:200px; name=state required>
                          <option value="">&nbsp;------Choose State------</option>

                          <option value="Johor">Johor</option>

                          <option value="Kedah">Kedah</option>

                          <option value="Kelantan">Kelantan</option>

                          <option value="Melaka">Melaka</option>

                          <option value="Negeri Sembilan">Negeri Sembilan</option>

                          <option value="Pahang">Pahang</option>

                          <option value="Pulau Pinang">Pulau Pinang</option>

                          <option value="Perak">Perak</option>

                          <option value="Perlis">Perlis</option>

                          <option value="Sabah">Sabah</option>

                          <option value="Sarawak">Sarawak</option>

                          <option value="Selangor">Selangor</option>

                          <option value="Terengganu">Terengganu</option>

                          <option value="W. P. Kuala Lumpur">W. P. Kuala Lumpur</option>

                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td>PHONE NUMBER</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=text style=width:200px; name=phone_no required>
                          <div>
                            <small class="text-body font-weight-light">
                              &nbsp&nbspNote: Please include "-"
                            </small>
                          </div>
                      </td>
                    </tr>

                    <tr>
                      <td>DEPARTMENT</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                        <select style=width:200px; name=dept required>
                          <option value="">&nbsp--Choose Department--</option>
                          
                          <option value="Department 1">Department 1</option>

                          <option value="Department 2">Department 2</option>

                          <option value="Department 3">Department 3</option>

                          <option value="Department 4">Department 4</option>
                        </select>
                      </td>
                    </tr>

                      <td>DESIGNATION</td>
                      <td><?php echo "<form action=insert.php method=post>"; ?>
                        :
                          <input type=text style=width:200px; name=designation required>
                      </td>
                    </tr>

                    <tr>
                      <td>DATE OF HIRE</td>
                      <td>: 
                        <input type=date style=width:150px; name=date_of_hire required>
                    </tr>       
                  </tbody>
              </table>

                  <div>
                    <br>
                      <?php
                         echo"<center><button class='btn btn-dark' <input type=submit>Save Details</button>";
                         echo"</form>";
                      ?>
                  </br>
                  </div>            
            </div> 
              
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
