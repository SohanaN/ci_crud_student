
<?php
require './classes/student.php';
$obj = new Student();

$student_id = $_GET['id'];
$result = $obj->select_student_info_by_id($student_id);
$student_info = mysqli_fetch_assoc($result);
/*
 * echo '<pre>';
  print_r($student_info);
  exit();
 */
?>
<html>
    <head>
        <title>Edit Student</title>
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
                    <h3 align="center">Edit Student</h3>
                    <hr/>
                    <form action="" method="post">
                        <table border="1" width="70%" align="center">
                            <tr>
                                <td>Student Name</td>
                                <td>
                                    <input type="text" name="student_name" value="<?php echo $student_info['student_name'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td>
                                    <input type="email" name="email_address" value="<?php echo $student_info['email_address'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td>
                                    <input type="number" name="mobile_number" value="<?php echo $student_info['mobile_number'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="btn" value="Update Student">
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
                <td width="150px">right</td>
            </tr>
            <tr>
                <td colspan="3" height="80px">footer</td>
            </tr>
        </table>
    </body>
</html>