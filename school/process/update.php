<body style = "font-family: Arial;background-color: lightblue;margin-left: 90px;margin-right: 90px;" >
    <?php 
    
    require '../connection.php';
    echo "<h1> You Have Updated to student with an id of " . $_POST['id'] . "</h1>";


    $sql = " UPDATE student SET
        first_name ='". $_POST ['first_name'] . "',
        middle_name ='". $_POST['middle_name'] . "',
        last_name ='". $_POST['last_name'] . "',
        gender ='". $_POST ['gender'] . "',
        birthday ='". $_POST['birthday'] . "',
        course ='". $_POST['course'] . "',
        year ='". $_POST ['year'] . "',
        section ='". $_POST['section'] . "'
        WHERE id=" .$_POST['id'];

    echo "sql value" . $sql;

    try{
        $conn->exec($sql);
        echo "<p style= 'color: green;'> Successfully updated the student </p>";
    } catch(PDOException $e) {
        echo $sql . "<p style='color: green;>" . $e->getMessage() . " </p> ";
    }

    $conn = null;
    ?>
    <hr>

    <a href = "../">Home </a>



