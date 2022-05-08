<?php
include_once("dbcontroller.php");
include_once("header.php");
// REGISTER USER
if(isset($_POST['register'])){

    // receive all input values from the form
    $email =  $_POST['email'];
    $password_1 = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];    
    $name =  $_POST['name'];       
      
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if($password_1!= $confirm_password){
      array_push($errors, "The two passwords do not match");
    }       
    if (empty($name)) { array_push($errors, "User name is required"); }
    
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email    
    $user_check_query = "SELECT * FROM users WHERE  email='$email' LIMIT 1";

    $result = mysqli_query($con,$query);    
    if (!empty ($result)){ // if user exists        
        if ($result[0]['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }   

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $Md5password = md5($password_1);    
        $query = " INSERT INTO users( email , `password` ,`name`) 
                    VALUES ('". $email ."','". $Md5password ."','". $name ."' )";    
    
        if(  mysqli_query($con,$query)){                                                         
                header ('Location: login.php' );
        }else{
            echo "Can't create your count !";
        }                
    }    
}
include_once("header.php");
?>

<br>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="tweety1.PNG" width="90%" height="50%" class="img-responsive" />
        </div><!-- /.col-lg-4 -->
        <div class="register col-lg-6">            
            <h5>Enter your account details below:</h5>
            <br>
            <form method="post" action="signup.php" enctype="multipart/form-data">
                <?php include('errors.php'); ?>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email"
                        value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" placeholder="Email"
                        required />
                </div>
                <br>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                        required />
                </div>
                <br>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                        placeholder="Re-Password" required />
                </div>
                <br>                           
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name"
                        value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" required>
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-outline-primary btn-block"
                        name="register">Register</button>
                </div>

            </form>
            <span>Already a member ? <a href="login.php"> Sign in </a></span>
        </div>
    </div>
</div>