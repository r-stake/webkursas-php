<?php
    if(isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


        if (empty($uid) || empty($pwd)) {
            header("Location: ../index.php?=login=empty");
            exit();
        }
        else {
            $sql = "SELECT * FROM users WHERE USER_uid = '$uid'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if ($result_check < 1) {
                header("Location: ../index.php?=login=error");
                exit();
            }
            else {
                if ($row = mysqli_fetch_assoc($result)) {
                    // dehashing slaptažodį
                    $hashedPwdCheck = password_verify($pwd, $row['USER_pwd']);
                    if($hashedPwdCheck == false) {
                        header("Location: ../index.php?=login=eror");
                        exit();
                    }
                    elseif($hashedPwdCheck == true) {
                        // Login vartotoją į svetainę
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['USER_first'];
                        $_SESSION['u_last'] = $row['USER_last'];
                        $_SESSION['u_email'] = $row['USER_email'];
                        $_SESSION['u_uid'] = $row['USER_uid'];
                        header("Location: ../index.php?=login=success");
                        exit();
                    }
                }
            }
        }

    
    }
    else {
        header("Location: ../index.php?=login=error");
        exit();
    }
