<body style = "font-family: Arial;background-color: lightblue;margin-left: 90px;margin-right: 90px;" >   
        <?php
        require '../connection.php';

        echo "<h1>You have deleted the student with an id of " . $_GET['student_id'] . "</h1>";

        $sql = "DELETE FROM student WHERE id=" . $_GET['student_id'];

        echo "sql value: " . $sql;

        try {
            $conn->exec($sql);
            echo "<p style='color: green;'>Successfully deleted the student</p>";
        } catch(PDOException $e) {
            echo $sql . "<p style='color: green;'>" . $e->getMessage() . "</p>";
        }
        
        $conn = null;
        ?>
        <a href = "../"> Home </a>