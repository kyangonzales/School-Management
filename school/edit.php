
        <body style = "font-family: Arial;background-color: lightblue;margin-left: 90px;margin-right: 90px;" >
            <?php
            require_once "connection.php";
            $sql = "SELECT * FROM student WHERE id= ". $_GET['student_id'];

            $statement = $conn->prepare($sql);
            $statement->execute();

            $student = $statement->fetch(PDO::FETCH_ASSOC);


            $conn = null;
            ?>
            <h1> You Are editing a student with an id of <?php echo $_GET['student_id']; ?> </h1>
            <hr>
            <form action="process/update.php" method="post" >
                <input type = "hidden" name = "id" value= "<?php echo $student ['id']; ?> " />
                <h2> Student Details</h2>
                <label> Enter First name: </label>
                <input type="text" name="first_name" value="<?php echo $student ['first_name']; ?> " />
                <br>

                <label> Middle Name: </label>
                <input type="text" name="middle_name" value="<?php echo $student ['middle_name']; ?> " />
                <br>        

                <label> Last Name: </label>
                <input type="text" name="last_name" value="<?php echo $student ['last_name']; ?> " />
                <br>
                <label> Gender: </label>
                <input type="text" name="gender" value="<?php echo $student ['gender']; ?> " />
                <br>

                <label> Birthday: </label>
                <input type="text" name="birthday" value="<?php echo $student ['birthday']; ?> " />
                <br>        

                <label> Course: </label>
                <input type="text" name="course" value="<?php echo $student ['course']; ?> " />
                <br>
                <label> Year: </label>
                <input type="text" name="year" value="<?php echo $student ['year']; ?> " />
                <br>

                <label> Section: </label>
                <input type="text" name="section" value="<?php echo $student ['section']; ?> " />
                <br>        
    
                <hr>
                <button type="submit"> Update Student</button>
            </form>
