<style>
        #student-table th, #student-table td{
            border: 1.5px solid green;
            width: 200px;
            font-size: 15px;
            text-align:center;
        }#bc{
            width: 220px;
            padding: 8px 2px;
            margin: 5px 0;
            box-sizing: border-box;
        }#buton{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 12px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        }label {
            display: inline-block;
            width: 120px;
            text-align: left;
            font-size:1em;
        }body {
            background-image: url("puti.webp");
            background-size: cover;
            background-attachment: fixed; 
            
            font-family: Arial;
            background-color: lightblue;
            margin-left: 90px;
            margin-right: 90px;
        }#bc{
            border: 3px solid #55;
        }
    </style>

    <?php
    session_start();
    if(empty($_SESSION['logged_in'])) {
        die(header("Location: login.php"));
    }
    ?>
     <p style="font-size:3.5em;text-align:center;font-family: Cooper Black;margin-top: 25px;">SCHOOL MANAGEMENT SYSTEM</p>

        <!-- <h1 style="text-align:center;">Student Management System</h1> -->
            <hr>
            <h3>Welcome back! <?php echo $_SESSION['user']['full_name']; ?> | 
            <a href="process/logout.php">Logout</a>
            <hr>

            <?php

            if(!empty($_GET['error'])) { ?>
                <h2 style="color:red;"><?php echo $_GET['error']; ?></h2>
            <?php
            } // end of if(!empty)
            ?>
 
<body>      
       

        <form action="process/insert.php" method="post" id="forms" >
            <h2 style = "font-family: Cooper Black;">Add New Student</h2>
            <label id = "label">Enter First Name: </label>
            <input type="text" name="first_name" placeholder="First Name"id="bc"/>
            <br>

            <label id = "label">Enter Middle name: </label>
            <input type="text" name="middle_name" placeholder="Middle Name "id="bc" />

            <br> 

            <label id = "label">Enter Last name: </label>
            <input type="text" name="last_name" placeholder="Last Name "id="bc" />

            <br> 
  
            <label id = "label">Enter Gender: </label>
            <input type="text" name="gender" placeholder="Gender" id="bc" />
            <br> 

            <label id = "label">Enter Birthday: </label>
            <input type="text" name="birthday" placeholder="Birthday" id="bc" />
            <br> 

            <label id = "label">Enter course: </label>
            <input type="text" name="course" placeholder="Course" id="bc" />
            <br> 
        
            <label id = "label">Enter Year: </label>
            <input type="text" name="year" placeholder="Year" id="bc" />
            <br>

            <label id = "label">Enter Section: </label>
            <input type="text" name="section" placeholder="Section" id="bc" />
            <br> 
            
            <hr>
            <button type="submit" id="buton">Save</button>
        </form>
    <h2>Student List</h2>
        <form action="search.php" method="GET">
                <input type="search" name="search" placeholder="Search students." />
                <button type="submit">Search</button>
            </form>
            <?php include_once "components/student_table.php"; ?>