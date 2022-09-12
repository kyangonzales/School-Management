<h3>Search results for the keyword: <b>"<?php echo $_GET['search']; ?>"</b></h3>
<?php
require_once "connection.php";
$sql = "SELECT * FROM student WHERE last_name LIKE :search";

$statement = $conn->prepare($sql);
$statement->execute(["search" => "%". $_GET['search']. "%" ]);
?>

<style>
#students-table th, #students-table td{
            border: 1.5px solid green;
            width: 200px;
            font-size: 20px;
            text-align:center;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        }
</style>
<table id="students-table">
<thead>
    <tr>
         <th>#</th>
        <th>ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>    
        <th>Gender</th>    
        <th>Birthday </th>
        <th>Course</th>
        <th>Year</th>
        <th>Section</th>  
        <th>Action</th>   
    </tr>
</thead>
<tbody>
    <?php
    $i = 0;
    while($student = $statement->fetch(PDO::FETCH_ASSOC)) {
        $i++;
    ?>
        <tr>
        <td><?php echo $i; ?>.</td>
        <td><?php echo str_pad($student['id'], 6, '0', STR_PAD_LEFT); ?></td>
        <td><?php echo $student['first_name']; ?></td>
        <td><?php echo $student['middle_name']; ?></td>
        <td><?php echo $student['last_name']; ?></td>
        <td><?php echo $student['gender']; ?></td>
        <td><?php echo $student['birthday']; ?></td>
        <td><?php echo $student['course']; ?></td>
        <td><?php echo $student['year']; ?></td>
        <td><?php echo $student['section']; ?></td>

        <td>
            <a href="edit.php?student_id=<?php echo $student['id']; ?>">Edit</a>
            &nbsp;|&nbsp;
            <a href="process/delete.php?student_id=<?php echo $student['id']; ?>">Delete</a>
        </td>
        </tr>
    <?php
    } // end of while...

    $conn = null;
    ?>
</tbody>
</table>
<br><br><br><br><br>