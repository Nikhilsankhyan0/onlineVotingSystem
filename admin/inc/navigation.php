<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
  <style>
    body {
      margin: 0;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 25%;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    li a.active {
      background-color: #04AA6D;
      color: white;
    }

    li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    p {
      margin-top: 2%;
      margin-left: 0px;
      margin-right: 0px;
    }
ul{
  margin-left: -0.8%;
}
    section p {
      position: absolute;
      left: 27%;
      margin-right: 0%;
      max-height: 500px;
      overflow: auto;
    }
  </style>
</head>

<body>
  <ul>
    <p>
      <b> welcome :-- </b>
      <?php echo $_SESSION['username']; ?>
    </p>
    <li>  <a class="active" href="index.php?home_page=1">  <i class="fa-solid fa-house"></i>  Home</a></li>
    <li><a href="index.php?newsPage=1"><i class="fa-solid fa-newspaper"></i> News</a></li>
    <li><a href="index.php?contact_us_page=1">   <i class="fa-regular fa-id-badge"></i> Contact</a></li>
    <li><a href="index.php?add_candidate_page=1"><i class="fa-solid fa-user"></i> Add candidate</a></li>
    <li><a href="index.php?candidates_page=1"><i class="fa-solid fa-check-to-slot"></i>  Candidate</a></li>
    <li><a href="index.php?add_election_page=1"><i class="fa-solid fa-check-to-slot"></i>  Add election</a></li>
    <li><a href="index.php?live_election_page=1"><i class="fa-solid fa-star"></i>  Live election</a></li>

    <li><a href="logout.php" style="margin-bottom:0%" ><i class="fa-solid fa-right-from-bracket"></i>  logout</a></li>
  </ul>

</body>

</html>