
<!DOCTYPE html>
<html>
    
<head>
	<title>Login Online Voting system</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/download.jpeg">
	
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/images/download.jpeg" class="brand_logo" alt="Logo">
					</div>
				</div>
                <?php
                if(isset($_GET['sign-up'])){
                    ?>
                    <div class="d-flex justify-content-center form_container">
					<form method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="su_username" class="form-control input_user" placeholder="username" required />
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="su_contact_no" class="form-control input_pass" placeholder="Contact #" required />
						</div>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="su_password" class="form-control input_pass" placeholder="Password" required />
						</div>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="su_retype_password" class="form-control input_pass" placeholder="Retype Password" required />
						</div>

							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="sign_up_btn" class="btn login_btn"> Sign up</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already Created Account<a href="index.php" class="ml-2">Sign in</a>
					</div>					
				</div>
                    <?php

                }else{
                ?>
                    <div class="d-flex justify-content-center form_container">
					<form method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="contact_no" class="form-control input_user" placeholder="Conact No." required />
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" placeholder="password" required />
						</div>

							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="loginBtn" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
                
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="?sign-up=1" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
                <?php
                }
                ?>
                <?php
                if(isset($_GET['registered'])){
                    ?>
                            <span class="bg-white text-success text-center my-3"> Your Account has been created sucessfully      </span>
                    <?php
                }else if(isset($_GET['invalid'])){
                    ?>
                    <span class="bg-white text-danger text-center my-3"> password mismatched plz try again      </span>
                     <?php

                }else if(isset($_GET['not_registered'])){
                    ?>
                    <span class="bg-white text-warning text-center my-3"> sorry you are not registered    </span>
                     <?php
                }else if(isset($_GET['invalid_access'])){
                    ?>
                    <span class="bg-white text-danger text-center my-3"> invalid username & password  </span>
                     <?php
                }  
                
                

                ?>

				
			</div>
		</div>
	</div>
    <script src="assets/js/jquery.min.js"> </script>
    <Script src="assets/js/bootstrap.min.js">   </script>
    

</body>
</html>


<?php
require_once("admin/inc/config.php");
if(isset($_POST['sign_up_btn'])){
    $su_username = mysqli_real_escape_string($db,$_POST['su_username']);
    $su_contact_no = mysqli_real_escape_string($db,$_POST['su_contact_no']);
    $su_password = mysqli_real_escape_string($db,$_POST['su_password']);
    $su_retype_password = mysqli_real_escape_string($db,$_POST['su_retype_password']);
    $user_role="Voter";

    if($su_password == $su_retype_password){
        
        mysqli_query($db,"insert into user(username,contact_no	,password,user_role) VALUES ('".$su_username."','".$su_contact_no."','".$su_password."','".$user_role."')") or die(mysqli_error($db));
    ?>

        <script>location.assign("index.php?sign-up=1&registered=1");    </script>
    <?php
    }else{
    ?>
    <script>   location.assign("index.php?sign-up=1&invalid=1");  </script>

    <?php
    }
}else if(isset($_POST['loginBtn'])){
    $contact_no  = mysqli_real_escape_string($db,$_POST['contact_no']);
    $password  = mysqli_real_escape_string($db,$_POST['password']);

    $fetchingdata=mysqli_query($db, "select * from user where contact_no = '".$contact_no."' ") or die(mysqli_error($db));

    //$data= mysqli_fetch_assoc($fetchingdata);

    //echo $data['username'];
    if(mysqli_num_rows($fetchingdata) > 0)
       {

        $data= mysqli_fetch_assoc($fetchingdata);
        if($contact_no == $data['contact_no'] AND $password == $data['password']){
            session_start();
            $_SESSION['user_role']=$data['user_role'];
            $_SESSION['username'] = $data['username'];
            if($data['user_role'] == "Admin"){
                $_SESSION['key']="AdminKey";
                ?>
                <script>   location.assign("admin/index.php?home_page=1");  </script>
           <?php

            }
            
            else if($data['user_role'] == "candidate"){
                $_SESSION['key']="candidatekey";
                ?>
                <script>   location.assign("candidate/index.php");  </script>
           <?php
                 
            }
            else{
                $_SESSION['key']="voterskey";
                ?>
                <script>   location.assign("Voters/index.php");  </script>
           <?php
                 
            }

            
        }else{

            ?>
            <script>   location.assign("index.php?invalid_access=1");  </script>
            <?php
        }

       }else{
        ?>
        <script>   location.assign("index.php?sign-up=1&not_registered=1");  </script>
        <?php
       }
}


?>