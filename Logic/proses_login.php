<?php
    session_start();
    include '../helper/connection.php';
    include '../helper/helper.php';

    $EMAIL_MEMBER = $_POST['email'];
    $PASSWORD_MEMBER = $_POST['password'];

    $SQL_SELECT = mysqli_query($CONNECTION,"SELECT member_id,member_email,password_member,role_id
                               from member where member_email = '$EMAIL_MEMBER' 
                               AND password_member = '$PASSWORD_MEMBER' ");

    $CHECK_SQL = mysqli_num_rows($SQL_SELECT);

    if($CHECK_SQL > 0) {
        $FETCH_DATA = mysqli_fetch_assoc($SQL_SELECT);
        
        $S_MEMBER_ID = $_SESSION['member_id'] = $FETCH_DATA['member_id'];
        $S_EMAIL = $_SESSION['email'] = $EMAIL_MEMBER;
        $S_ROLE = $_SESSION['role_id'] = $FETCH_DATA['role_id'];

        function getSession(){
            $S_MEMBER_ID;
            $S_EMAIL;
            $S_ROLE;
        }

        switch($FETCH_DATA['role_id']){
            case 0  :
                getSession();
                header("location:../");
            break;
            case 1 :
                getSession();
                header("location:../");
            break;
            case 2 :
                getSession();
                header("location:../res/layout/admin/index.php");
            break;
        }
    } else {
        return;
    }

   

?>