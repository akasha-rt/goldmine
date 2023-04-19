<?php
//if the request contains 'action_req' == 'BackAdmin'
if ($_REQUEST['action_req'] == 'BackAdmin') {
    global $current_user;
    //get admin_id from preferences
    $admin_id = $_COOKIE['admin_id'];
    //login with admin_id
    $_SESSION['authenticated_user_id'] = $admin_id;
    unset($_COOKIE['admin_id']);
    //redirect to home page
    //SugarApplication::redirect('index.php?module=Home&action=index');
    echo "<script>window.parent.location = 'index.php?module=Home&action=index'</script>";

//if the request contains an 'user_id' to Login_As
} elseif ($_REQUEST['user_id'] != '') {
    //get current user
    global $current_user;
    //get user_id from request
    $new_user_id = $_REQUEST['user_id'];

    setcookie("admin_id", $current_user->id, time() + 3600, '/');

    //login with given user_id
    $_SESSION['authenticated_user_id'] = $new_user_id;
    //redirect to home page
    //SugarApplication::redirect('index.php?module=Home&action=index');
    echo "<script>window.parent.location = 'index.php?module=Home&action=index'</script>";
}
