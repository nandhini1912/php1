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
  include('database.php');
    $studentName = $_POST['stname'];
    $className = $_POST['stclass'];
    echo $studentName;
    echo $className;


    // Insert 

    $insertQuery = "INSERT INTO `student details`(Student_Name, Student_class) VALUES (`$studentName`, `$className`)";

    if ($conn->query($insertQuery) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
      }

    ?>
</html>