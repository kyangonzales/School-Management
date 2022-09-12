
         <body style = "font-family: Arial;background-color: lightblue;margin-left: 90px;margin-right: 90px;" >
        <?php       
       

        // if (empty($_POST['first_name'])|| empty($_POST['middle_name'])||empty($_POST['last_name'])|| empty($_POST['gender'])||empty($_POST['birthday'])|| empty($_POST['course'])||empty($_POST['year'])||empty($_POST['section'])){
        //     $errorMessage = "Error: One of the field is empty!!";
        //     header("location: ../?error=".$errorMessage);
        //     die();
        // }

        // if(floatval ($_POST['year']) <= 0){
        //     $errorMessage = "Error: Year is not valid value!!";
        //     header("location: ../?error=".$errorMessage);
        //     die();
        // }


        require_once "../connection.php";

        echo "First Name: " . $_POST ['first_name'];
        echo"<br>";
        
        echo "Middle Name: " . $_POST ['middle_name'];
        echo"<br>";

        echo "Last Name: " . $_POST ['last_name'];
        echo"<br>";
        
        echo "Gender: " . $_POST ['gender'];
        echo"<br>";
        
        echo "Birthday: " . $_POST ['birthday'];
        echo"<br>";

        echo "Course: " . $_POST ['course'];
        echo"<br>";  
        
        echo "year: " . $_POST ['year'];
        echo"<br>";
        
        echo "Section: " . $_POST ['section'];
        echo"<br>";

        
        $sql = "
        INSERT INTO student 
            (first_name, middle_name, last_name, gender, birthday, course, year, section) 
        VALUES 
            ('".$_POST['first_name']."', '".$_POST['middle_name']."', '".$_POST['last_name']."','".$_POST['gender']."','".$_POST['birthday']."','".$_POST['course']."','".$_POST['year']."', '".$_POST['section']."' );";

    echo "sql value: " . $sql;

    try {
        $conn->exec($sql);
        echo "<p style='color: green;'>New record created successfully</p>";
        
    // sleep(3);
    //    header("location: ../");
    
    } catch(PDOException $e) {
        echo $sql . "<p style='color: green;'>" . $e->getMessage() . "</p>";
    }
    
    $conn = null;

        ?>
