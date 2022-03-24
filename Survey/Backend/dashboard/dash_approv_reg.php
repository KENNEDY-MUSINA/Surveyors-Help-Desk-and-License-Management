<?php
extract($_POST);
include_once("../License/query.php");


        if(!isset($_POST["submit"])){
                $sql = mysqli_query($conn, "SELECT ref_no FROM landlicense_app WHERE email = '$email'");
                $num_row = mysqli_fetch_row($sql)[0];
                echo "$num_row";
    

                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $ref_no = $num_row;
               
               

                $sql = "INSERT INTO `approved_app` (`firstname`,`lastname`,`address`,`gender`,`email`,`phone`,`ref_no`)
                VALUES('$firstname','$lastname','$address', '$gender', '$email', '$phone','$ref_no')";
                if (mysqli_query($conn, $sql)) {
                    //header("location:../../Pages/fieldSet.php");

                    echo "New record created successfully !";
                }else{
                        echo "Error: " . $sql . "
                         " . mysqli_error($conn);
                    }
                         mysqli_close($conn);
        }else{
            echo "Error";
        }       
    

    


?>