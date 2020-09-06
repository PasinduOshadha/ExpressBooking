<?php
if(isset($_POST['login'])){
    $user_mail = mysqli_real_escape_string($db_con, $_POST['emailAddress']);
    $user_pass = mysqli_real_escape_string($db_con, $_POST['inputPassword']);

    // checking empty
    if(empty($user_mail)) {
        $email_error = 'Email is required';
    }

    // checking empty
    if(empty($user_pass)) {
        $pass_error = 'Password is required';
    }

    // check for admins
    $check_admin_query = "SELECT * FROM admin WHERE admin_email='$user_mail' AND admin_pw='$user_pass'";
    $result_admin = mysqli_query($db_con, $check_admin_query);
    $admin = mysqli_fetch_assoc($result_admin);


}