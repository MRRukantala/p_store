<?php

    session_start();

    include ("../helper/connection.php");

    $STORE_NAME = $_POST['store'];
    $ADDRESS_STORE = $_POST['store_address'];
    $MEMBER_ID = $_SESSION['member_id'];

    $QUERYINSERT = "INSERT INTO store (store_id,store_name, member_id, address)
                     VALUES ('storeid','$STORE_NAME', '$MEMBER_ID', '$ADDRESS_STORE')";

    $QUERYUPDATE = "UPDATE member set role_id = '1' where member_id = '$MEMBER_ID'";


    $RUNQUERY = mysqli_query($CONNECTION, $QUERYINSERT);
    $RUNQUERYUPDATE = mysqli_query($CONNECTION, $QUERYUPDATE);

    var_dump($RUNQUERY);
    var_dump($QUERYUPDATE);

    header("location:../Logic/proses_logout.php");

    // echo $STORE_NAME;
    // echo $ADDRESS_STORE;
    // echo $MEMBER_ID;

?>