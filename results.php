<?php
require "database_connection_test.php";

//starting session
    session_start();
//setting a session ans assigning a value to session
    if(isset($_POST["Submit"])){
        

//Adding to database  (Activity H)
    $Search_term= $_POST["SearchBox"];
    echo  $Search_term;
    $sql = "INSERT INTO practical_lab_table (Search_term) VALUES ('$Search_term')";
    if (mysqli_query($connection,$sql)){
        echo "New record created successfully"."<br>";
    }
        else {
        echo "Error: " . $sql . "<br>" .mysqli_error($connection);
  }
    }
    ?>


<?php
   //selcting from database (Activity I)
   $data="SELECT Lab_id, Search_term FROM practical_lab_table";
   $result=$connection->query($data);
   //$ids = 1;

   if ($result-> num_rows > 0){
   
        
       //output data for each row
       while($row =$result -> fetch_assoc()){

        $ids = $row["Lab_id"];
           echo "Results:" . $row["Search_term"] ."<br>";
           echo "<form method= 'POST'><input type='hidden' name='Id' value= '$ids'>
           <button name='delete'>delete</button> </form>";

           echo "<form method ='post'  action='edit.php'><input type='hidden' name='Id2' value= '$ids'>
           <button name='edit'>edit</button> </form>";

           
           echo "<br>";
       }

   }
   else{
       echo " 0 results";
   
}

?>
<?php
//deleting from database
if (isset($_POST['delete'])){
    $Lab_id = $_POST['Id'];
    $_SESSION['Lab_id']=$_POST['Id'];

$sql = "DELETE FROM practical_lab_table WHERE Lab_id = $Lab_id";


if ($connection->query($sql) === TRUE){
    echo "done";
    header("location: results.php");
    }
    else{
        echo "error";
    }
    
}

?>

