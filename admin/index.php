<?php
require_once("inc/header.php");
require_once("inc/navigation.php");

if (isset($_GET['home_page'])) {
    require_once("inc/home.php");
} 
 else if (isset($_GET['add_election_page'])) {
    require_once("inc/add_election.php");
}
 else if (isset($_GET['newsPage'])) {
    require_once("inc/news.php");
}
else if (isset($_GET['add_candidate_page'])) {
    require_once("inc/add_candidate.php");
}
else if (isset($_GET['live_election_page'])) {
    require_once("inc/live_election.php");
}
else if (isset($_GET['contact_us_page'])) {
    require_once("inc/contact_us.php");
}
else if (isset($_GET['candidates_page'])) {
    require_once("inc/candidates.php");
}


?>


<?php

// require_once("inc/footer.php");

?>