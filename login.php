<?php 
include_once("dbcontroller.php");
include_once("header.php");

if (isset($_POST['login_user'])){    
    $email =  $_POST['email'];
    $password = $_POST['password'];     

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }  

    if (count($errors) == 0) {

        $password = md5($password);       
        
        $query = "SELECT * FROM `users` WHERE email='$email' AND `password`='$password'";

        $results =  mysqli_query($con,$query);   

        if (!empty ($results)){                          

            while($row=mysqli_fetch_assoc($results)) {                
                
                $_SESSION['id']  = $row['id'];                     

                $_SESSION['success'] = "You are now logged in";           

                header('Location: index.php');                            
            }		                                          
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>


<br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="tweety1.PNG" width="90%" height="40%" class="img-responsive" />
        </div>
        <div class="col-lg-6">
            <h1> Login</h1>
            <br>
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="form-group">                    
                    <input type="email" class="form-control" name="email" id="email" 
                    value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>"
                        placeholder="Enter email address" required />
                </div>                
                <br>
                <div class="form-group">                    
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter password" required/>
                        
                </div>                              
                <br />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg  btn-block" name="login_user">Login</button>
                </div>
            </form>                              
      
      
        </div>
    </div>
</div>