<?php

 include_once("../License/query.php"); 
 if(!isset($_POST['submit'])){

    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $password = mysqli_real_escape_string($conn,md5($_POST['password']));

    if ($firstname != "" && $password != ""){

        $sql_query = "select * from dash_board_reg where email='".$email."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        if($result){
            $_SESSION['firstname'] = $firstname;
           header("Location:../../dashboard/dash_handle.php ");
        }else{
            echo "Invalid username and password";
        }

    }

}   
 
?>