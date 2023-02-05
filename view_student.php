
<?php
require './classes/student.php';
$obj = new Student();

$result = $obj->select_all_student();
?>
<html>
    <head>
        <title>View Student</title>
    </head>
    <body>
        <table border="1" align="center" width="980px" height="1100px">
            <tr>
                <td width="150px" height="150px">Logo</td>
                <td colspan="2">banner</td>
            </tr>
            <tr>
                <td colspan="3" height="50px">
                    <a href="add_student.php">Add Student</a> |
                    <a href="view_student.php">View Student</a>
                </td>
            </tr>
            <tr>
                <td>left</td>
                <td valign="top">
                    <h3 align="center">All Student's</h3>
                    <hr/>
                    <table border="1" align="center" width="90%">
                        <tr>
                            <th>Id</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['student_id'] ?></td>
                                <td><?php echo $row['student_name'] ?></td>
                                <td><?php echo $row['email_address'] ?></td>
                                <td><?php echo $row['mobile_number'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['student_id'] ?>">Edit</a> |
                                    <a href="delete.php?id=<?php echo $row['student_id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </td>
                <td width="150px">right</td>
            </tr>
            <tr>
                <td colspan="3" height="80px">footer</td>
            </tr>
        </table>
    </body>
</html>