<?php

include_once ('../License/query.php');
if(!isset($_GET['delete'])){

        $id=$_GET['id'];
        $sql = "DELETE FROM `landLicense_app` WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "Deleted Successfull" .$id;
        } 
        else {
            echo "Failed to delete: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    else{
        echo "Error";
    }

?>