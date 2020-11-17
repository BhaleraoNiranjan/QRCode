<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['emaild'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("user_info", $_POST['fname'], $_POST['lname'], $_POST['username'], $_POST['password'], $_POST['emaild'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
}else echo "All fields are required";
?>
