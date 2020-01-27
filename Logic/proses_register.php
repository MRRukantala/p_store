<?php

    include ("../helper/connection.php");
    include ("../helper/helper.php");

    $EMAIL_MEMBER = $_POST['email'];
    $PASSWORD_MEMBER = $_POST['password'];

    $SQL_INSERT = "INSERT INTO member (member_id,
                                       member_email,
                                       password_member)
                    VALUES ('Percobaan','$EMAIL_MEMBER', '$PASSWORD_MEMBER')";

     $RUN_SQL = mysqli_query($CONNECTION, $SQL_INSERT);
   
     if($RUN_SQL){
         header("location:../");
     } else {
         echo""?>
         <a href="<?php echo BASE_URL."?halaman=res/layout/register_login"; ?>">Kembali</a>
         <?php
     }
?>
