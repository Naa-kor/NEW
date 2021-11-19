<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Class Work</title>
   
</head>

<body>
<?php
//starting session
    session_start();


//setting a session ans assigning a value to session
    if(isset($_POST["SearchBox"])){
        $_SESSION["SearchBox"]=$_GET["SearchBox"];
        echo $_SESSION["SearchBox"];
    } 
?>



<h3> SearchBox One</h3>
    <form action="my_form.php" method ="get">
        <input type="text" name="SearchBox" value="<?php
   if (isset($_GET["SearchBox"])){
       echo $_GET["SearchBox"];
   }
    ?>
    ">
        <br>
        <br>
        <input type="submit" name="Submit" >
    </form>

    <?php
   if (isset($_GET["SearchBox"])){
       echo $_GET["SearchBox"];
   }
    ?>



<h3> SearchBox Two</h3>
    <form action ="results.php" method="post"> 
        <input type="text" name="SearchBox" value="<?php
   if (isset($_POST["SearchBox"])){
       echo $_POST["SearchBox"];
   }
    ?>
    ">

        <br>
        <br>
        <input type="submit" name="Submit" >
    </form>
<br>


    <?php
    // get user input from search box one 
   if (isset($_POST["SearchBox"])){
       echo $_POST["SearchBox"];
   }

    ?>

    <!--<form action="" method="post" enctype="multipart/form-data">Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit"  value="Upload Image" name="submit">
    </form>-->


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
//if(isset($_POST["submit"]))
//$user_image= $_POST["submit"];
    //echo $user_image ;

    //$sql2 = "INSERT INTO practical_upload_table (user_upload) VALUES ('$user_image')";
    //if (mysqli_query($connection,$sql2)){
       // echo "New image added created successfully"."<br>";
    //}
        //else {
        //echo "Error: " . $sql2 . "<br>" .mysqli_error($connection);
  //}
    ?>

