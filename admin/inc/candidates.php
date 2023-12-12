<link rel="icon" href="../assets/images/download.jpeg">

<style>
    body{
        overflow-y: scroll;
    }
</style>




    <!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<?php

include("../admin/inc/navigation.php");
?>
    
    <div class="container-form" style="width: 75%; float: right; overflow-y: scroll; height: 700px">
      

      <table class="table 70%">
        <thead style="background-color: red; border-radius: 50px ;  ">
          <tr>
            <th scope="col"> Sr No </th>

            <th scope="col" > Candidate name</th>
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
    </div>
    

</body>

</html>