
<link rel="icon" href="../assets/images/download.jpeg">

<!-- 
<?php

// include("../admin/inc/navigation.php");
?> -->
<style>
    .container-form {
      width: 73%;
      float: right;
      /* padding-top: 285px; */
      max-height: 1000px;
      overflow: scroll;
    }

    .election {
      height: 370px;
    }

    form {
      height: 300px;
    }

    #selectElection {
      margin-top: 1%;
      margin-bottom: 1%;

    }
</style>

<div class="container-form">

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
    </tr>
  </thead>
  <tbody>


  </tbody>

<?php
$sql = "select * from add_election";
$result = mysqli_query($db, $sql);
if ($result) {
/*$row=mysqli_fetch_assoc($result);
      echo $row['name'];
      echo $row['name'];*/
$n = 1;
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
}
?>


<?php
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

mysqli_query($db, "insert into add_election (election_name, candidate,starting_date,ending_date,inserted_by,inserted_on) values('" . $election_name . "','" . $candidate . "','" . $starting_date . "','" . $ending_date . "','" . $inserted_by . "','" . $inserted_on . "')") or die(mysqli_error($db));
?>
<script> location.assign("index.php?live_election_page=1&added=1"); </script>
<?php

}
?>
 </table>
</div>
