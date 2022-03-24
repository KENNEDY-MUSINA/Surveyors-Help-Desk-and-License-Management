<?php
extract($_POST);
include_once("../License/query.php");

    // $sql = mysqli_query($conn, "SELECT * FROM dash_board_reg WHERE email = '$email'");
    // $num_row = mysqli_fetch_row($sql)[0];
    // if($num_row){
    //     echo "Email is Already taken";
    //     exit;
        
    // }else{
        if(!isset($_POST["submit"])){

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $password = md5($_POST['password']);
            $confirm_password =md5($_POST['confirm_password']);
            $email = $_POST['email'];

                $sql = "INSERT INTO dash_board_reg (firstname,lastname,password, confirm_password, email)
                VALUES('$firstname','$lastname','$email','$password','$confirm_password')";
                if (mysqli_query($conn, $sql)) {
                    //header("Location:../../dashboard/dash_handle.php "); 

                    echo "New record created successfully !";
                }else{
                        echo "Error: " . $sql . "
                         " . mysqli_error($conn);
                    }
                         mysqli_close($conn);
        
        }
?>