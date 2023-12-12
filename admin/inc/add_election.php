<link rel="icon" href="../assets/images/download.jpeg">

<?php


if (isset($_GET['added'])) {
  ?>
  <script>
    alert(" elections are going on");
  </script>
  <?php
}

?>

<?php /*

include("../admin/inc/navigation.php");
*/?>
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
      max-height: 1000px;
      overflow: auto;
    }
    .btn_main {
      margin-top: px;
      width: 97%;

    }
/* .footer{
  margin-bottom: 40px;
  height: 70px;
} */
    .container-form {
   width: 74%;
   float: right;
   max-height: 500px;
      padding-top: 420px;
      max-height: 1000px;
    
      overflow: scroll;
    } 
    
    .election {
      height: 415px;
    }
  </style>
</head>

<body>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
  </style>

  <section>
    <div class="container  election ">
      <form method="post">

        <div class="form-group">
          <label>Election Topic</label>
          <input type="text" class="form-control" placeholder="Enter Election topic" name="election_name" required>
        </div>
        <div class="form-group">
          <label>candidate</label>
          <input type="number" class="form-control" placeholder="Enter candidate number" name="no_of_candidates"required>
        </div>
        <div class="form-group">
          <label>starting date</label>
          <input type="date" class="form-control" placeholder="starting date" name="starting_date"required>
        </div>
        <div class="form-group">
          <label>ending date</label>
          <input type="date" class="form-control" placeholder="ending date" name="ending_date"required>
        </div>

        <button type="submit" class="btn_main btn-primary" name="submit">Submit</button>
      </form>


    </div>


<!-- <div class="container-form">

<table class="table">
  <thead>
    <tr>
      <th scope="col"> Sr No </th>
      <th scope="col"> election Name </th>
      <th scope="col"> Candidate</th>
      <th scope="col"> Starting date</th>
      <th scope="col"> ending date</th>
      <th scope="col"> inserted by</th>

      <th scope="col"> inserted on</th>

      <th scope="col" colspan="2" > Action </th>

      <!-- <th scope="col"> actions </th> -->
    <!-- </tr>
  </thead>
  <tbody> -->


  </tbody>

<?php /*
$sql = "select * from add_election";
$result = mysqli_query($db, $sql);
if ($result) {
/*$row=mysqli_fetch_assoc($result);
      echo $row['name'];
      echo $row['name'];*/
/*$n = 1;
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];
  $election_name = $row['election_name'];
  $candidate = $row['candidate'];
  $starting_date = $row['starting_date'];
  $ending_date = $row['ending_date'];
  $inserted_by = $row['inserted_by'];
  $inserted_on = $row['inserted_on'];


  echo '<tr>
          <td scope="row"> ' . $n . '  </td>
          <td> ' . $election_name . '	</td>
          <td> ' . $candidate . '		</td>
          <td> ' . $starting_date . '		</td>
          <td> ' . $ending_date . '		</td>
          <td> ' . $inserted_by . '		</td>
          <td> ' . $inserted_on . '		</td>

      <td> <button class="btn btn-primary"> <a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
               <button class="btn btn-primary"> <a href="delete.php? deleteid=' . $id . '" class="text-light">view result</a> </button>
               <button class="btn btn-primary"> <a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</a> </button>

          </td>
      </tr>';
  $n++;

}
}*/
?>


<?php /*
if (isset($_POST['submit'])) {
$election_name = mysqli_real_escape_string($db, $_POST['election_name']);
$candidate = mysqli_real_escape_string($db, $_POST['candidate']);
$starting_date = mysqli_real_escape_string($db, $_POST['starting_date']);
$ending_date = mysqli_real_escape_string($db, $_POST['ending_date']);
$inserted_by = $_SESSION['username'];
$inserted_on = date('Y-m-d');

$date1 = date_create($inserted_on);
$date2 = date_create($starting_date);
$diff = date_diff($date1, $date2);
if ($diff->format("%R%a") > 0) {

  $status = "Inactive";


} else {
  $status = "Active";
}
mysqli_query($db, "insert into add_election (election_name, candidate,starting_date,ending_date,inserted_by,inserted_on) values('" . $election_name . "','" . $candidate . "','" . $starting_date . "','" . $ending_date . "','" . $inserted_by . "','" . $inserted_on . "')") or die(mysqli_error($db));*/
?>
<!-- <script> location.assign("index.php?live_election_page=1&added=1"); </script> -->
<?php /*

}
?>
 </table>
</div> 