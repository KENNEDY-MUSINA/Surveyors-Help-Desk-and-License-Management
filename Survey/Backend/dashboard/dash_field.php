<?php

include_once ("../License/query.php");

if(count($_POST)>0){
    if($_POST['type']==1){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $sql = "INSERT INTO `field_set`( `firstname`,`lastname`,`address`, `gender`,`email`,`phone`) 
        VALUES ('$firstname','$lastname', '$address', '$gender' '$email','$phone')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if(count($_POST)>0){
    if($_POST['type']==2){
        $id=$_POST['id'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $sql = "UPDATE `field_set` SET `firstname`='$firstname', `lastname` ='$lastname', `address`='$address', `gender`='$gender', `email`='$email',`phone`='$phone' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if(count($_POST)>0){
    if($_POST['type']==3){
        $id=$_POST['id'];
        $sql = "DELETE FROM `field_set` WHERE id=$id ";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if(count($_POST)>0){
    if($_POST['type']==4){
        $id=$_POST['id'];
        $sql = "DELETE FROM field_set WHERE id in ($id)";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}

?>

       
