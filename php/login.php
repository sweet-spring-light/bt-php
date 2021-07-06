<?php

if (isset($_POST['name']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['name']) ;
    $password = validate($_POST['password']) ;

    $unamelogin = "H2103";
    $passwordlogin = "1234567";
 
    if (empty($uname)) {
        header("Location: ../login.php?error=UserName is required");
    } else if (empty($password)) {
        header("Location: ../login.php?error=Password is required");
    } else if (!($uname == $unamelogin) || !($password == $passwordlogin)) {
        header("Location: ../login.php?error=UserName or Password is fail");
    } else {
        header("Location: ../read.php?success=Login Success");
    }
}
