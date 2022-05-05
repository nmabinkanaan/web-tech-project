<?php 
include_once 'header.php';
?>
<section class="signup-form">
<h2> sign Up </h2>
    <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="full name ">
            <input type="text" name="email" placeholder="email ">
            <input type="text" name="uid" placeholder="user name ">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <button type="submit" name="submit"> Sign Up </button>
        </form>
    </div>
    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>chose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>chose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>passwords dont match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p> Somthing went wrong, try again! </p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p> Username already taken! </p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p> You have signed up! </p>";
        }
    }
    ?> 
</section>

<?php 
    include_once 'footer.php';
?>
