<?php 
require "database_connection_test.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Class Work</title>  
</head>
<body>
<h3>Edit search box</h3>
    <form action="#" method ="post">
        <input type="text" name="Updating" >
        <br>
        <button name="Update">Update</button>
    </form>

<?php
$id=null;
if(isset($_POST['edit'])){
    $id=$_POST["Id2"];
}
?>
    
    
    <?php
   if(isset($_POST['Update'])){
   
    $VAR=$_POST["Updating"];
      

    $sql1="UPDATE `practical_lab_table` SET `Search_term`='[value-2]' WHERE `Lab_id` = '$id' " ;

    if ($connection->query($sql1) === TRUE){
    echo "updated";
    echo $VAR; 
    }
    else{
        echo "error updating", $connection->error;
    }
}

    ?>
   
   
   


