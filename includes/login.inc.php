<?php
if (isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $mailid = $_POST['mailid'];
    $password = $_POST['pwd']; 

    if (empty($mailid) || empty($password)) {
        header("Location: ../Regist/index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Regist/index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailid, $mailid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($password, $row['passworduser']);
                if($pwdcheck == false) {
                    header("Location: ../Regist/index.php?error=wrongpwd");
                    exit();
                }
                elseif($pwdcheck == true) {
                    session_start();
                    $_SESSION['userId'] =  $row['id'];
                    $_SESSION['userUid'] =  $row['username'];
                    $_SESSION['userEmail'] = $row['email'];
                    
                    header("Location: ../Regist/index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../Regist/index.php?error=wrongpwd");
                    exit();
                }
            
            }
            else{
                header("Location: ../Regist/index.php?error=nouser");
                exit();
        }
    }

}
// else{
//     header("Location: ../Regist/signup.php");
//     exit();
}