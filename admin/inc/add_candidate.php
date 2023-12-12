<link rel="icon" href="../assets/images/download.jpeg">
    

<?php

include("../admin/inc/navigation.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
 .container {
      /* margin-top: 1%; */
      width: 100%;
      margin-bottom: 2%;
      background: #b3eff5;
      position: absolute;
      left: 27%;
      margin-right: 1%;
      overflow: auto;
    }
    .btn_one {
      margin-top:10px;
      width: 97%;

    }
/* .footer{
  margin-bottom: 40px;
  height: 70px;
} */
.container-form {
  width: 74%;
  max-height: 900px; /* Set a reasonable max height */
  float: right;
  padding-top: 355px; /* Check if this padding is needed */
  overflow: auto; /* Use 'auto' for automatic scrollbar handling */
}

    
    /* .election {
      height: 345px;
    } */

    
 
 
  </style>
</head>

<body>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">
  <style>

  </style>

  <section>
    <div class="container my-8 election ">
      <form method="post" enctype="multipart/form-data">

        <div class="form-group">


          <label>Candidate Name</label>
          <input type="text" class="form-control" placeholder="Enter candidate name" name="candidate_name">
        </div>


        <select id=selectElection name="election_id"  required> 
          <option value=""> Select Election
          </option>
          <?php
          $fetching_election = mysqli_query($db, "select * from add_election") or die(mysqli_error($db));
          $is_any_election_added = mysqli_num_rows($fetching_election);
          if ($is_any_election_added > 0) {
            while ($row = mysqli_fetch_assoc($fetching_election)) {
              $election_id = $row["id"];
              $election_name = $row['election_name'];
              ?>

              <option value="">
                <?php
                echo $election_name;
                ?>
              </option>
              <?php
            }
          } else {
            ?>

            <option value=""> "please add election first"</option> <br>

            <?php
          }
          ?>


        </select> <br>

        
        <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control" placeholder="candidate photo" name="candidate_image">
        </div>
        <div class="form-group">
          <label>Phone number</label>
          <input type="number" class="form-control" placeholder="enter phone number" name="candidate_phone">
        </div>


        <button type="submit" class="btn_one btn-primary" name="add_user">Add user</button>
      </form>


    </div>

<!-- 
    <div class="container-form">
      

      <table class="table">
        <thead>
          <tr>
            <th scope="col"> Sr No </th>

            <th scope="col"> Candidate name</th>
            <th scope="col"> candidate image</th>
            <th scope="col"> candidate phone</th>
            <th scope="col"> Inserted by</th>
            <th scope="col"> Inserted on</th>
            <th scope="col"> actions </th>
          </tr>
        </thead>
        <tbody>
        </tbody>
  






    <?php
    if (isset($_POST['add_user'])) {
      $election_id = mysqli_real_escape_string($db, $_POST['election_id']);
      $candidate_name = mysqli_real_escape_string($db, $_POST['candidate_name']);

      $candidate_phone = mysqli_real_escape_string($db, $_POST['candidate_phone']);
      $inserted_by = $_SESSION['username'];
      $inserted_on = date('Y-m-d');

      $target_folder = "../assets/images/candidate_photo";
      $candidate_image = $target_folder . rand(1111111111, 99999999999999999) . $_FILES['candidate_image']['name'];
      $candidate_image_temp_name = $_FILES['candidate_image']['tmp_name'];
      $candidate_image_type = strtolower(pathinfo($candidate_image, PATHINFO_EXTENSION));
      $allowed_type = array('jpg', 'png', 'jpeg');
      $img_size = $_FILES['candidate_image']['size'];
      if ($img_size < 3048576) {
        if (in_array($candidate_image_type, $allowed_type)) {
          if (move_uploaded_file($candidate_image_temp_name, $candidate_image)) {


            mysqli_query($db,  "INSERT INTO candidate_details ( election_id, candidate_name, candidate_image, candidate_phone, `inserted_by`, inserted_on) VALUES ('".$election_id."','".$candidate_name . "','" .$candidate_image . "','" .$candidate_phone. "','" .$inserted_by. "','" .$inserted_on. "')" )or die(mysqli_error($db));
  


          } else {
            ?>
            <script>
              alert(file not uploaded);
            </script>
            <?php
          }
        }
      } else {
        ?>
        <script>
          alert(we allow only jpg);
        </script>
        <?php
      }
    } else {
      ?>
      <script>

      </script>
      <?php

    
      
    }
?>
    <?php
    $sql = "select * from candidate_details";
    $result = mysqli_query($db, $sql);
    if ($result) {

      $n = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        $candidate_photo=$row['candidate_image'];
        $id = $row['id'];
        $candidate_name = $row['candidate_name'];
        $candidate_image = $row['candidate_image'];
        $candidate_phone = $row['candidate_phone'];
        $inserted_by = $row['inserted_by'];
        $inserted_on = $row['inserted_on'];


        echo '<tr>
				<td scope="row"> ' . $n . '  </td>
				<td> ' . $candidate_name . '	</td>
				<td> ' . $candidate_image . '		</td>
				<td> ' . $candidate_phone . '		</td>
				<td> ' . $inserted_by . '		</td>
				<td> ' . $inserted_on . '		</td>

			<td> <button class="btn btn-primary"> <a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
				 	<button class="btn btn-primary"> <a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a> </button>
				</td>
			</tr>';
        $n++;

      }
    }
    ?>
        </table>
    </div> -->
</body>