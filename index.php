<html>
    <head>
        <title>Forms</title>
    
    </head>
    <body>
        <center>
        <form method="post"action="index.php">
SIGN UP<br><br>
Name:<input type="text" name="stname"><br><br>
Class:<input type="text" name="stclass"><br><br>
<input type="Submit"value="Submit">
</form>
</center>
    </body>
    
    <?php
    error_reporting(0);
  include('database.php'); 
    $studentName = $_POST['stname'];
    $className = $_POST['stclass'];
    // echo $studentName;
    // echo $className;


    // Insert 

    $insertQuery = "INSERT INTO users (`username`, `password`) VALUES ('$studentName', '$className');";

    if ($conn->query($insertQuery) === TRUE) {
        echo "<br> <h1 style='color: green;'> New record created successfully </h1>";
      } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
      }
      $conn -> close();


      
    ?>
</html>