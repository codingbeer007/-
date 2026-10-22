<?php
    header('Content-Type: text/html; charset=utf-8');
    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="pay_equipment";
    $db_conn=new mysqli($db_server,$db_user,$db_password,$db_name);
    $db_conn->set_charset("utf8mb4");
        if(($db_conn->connect_error)){
            die("Connection Failed: ".$db_conn->connect_error);
        }else{
            //echo "เชื่อมต่อสำเร็จ";
        }
?>