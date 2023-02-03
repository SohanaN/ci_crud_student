<?php

class Student {

    //put your code here

    public function __construct() {
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'db_ci_oop_crud_tt';
        $this->conn = mysqli_connect($hostname, $username, $password, $db_name);
        if (!$this->conn) {
            die("sever not connected");
        } else {
//            echo "Database Sever connected";
        }
    }

//    for add page
    public function save_student($data) {
//        echo '<pre>';
//        print_r($data);
        $sql = "INSERT INTO tbl_student (student_name,email_address,mobile_number)VALUES('$data[student_name]','$data[email_address]','$data[mobile_number]')";
        mysqli_query($this->conn, $sql);
    }

//    for view page
    public function select_all_student() {
        $sql = "SELECT * FROM tbl_student"; // * all data
//        $sql = "SELECT student_name,mobile_number FROM tbl_student"; // jei jei data lagbe seta
        $result = mysqli_query($this->conn, $sql);
        /*
          echo '<pre>';
          print_r($result); // array ke echo kora jay na print kore dekhte hoy
          exit();
         * */
        return $result;
    }

//    for delete page
    public function delete_student($student_id) {
        $sql = "DELETE FROM tbl_student WHERE student_id='$student_id'";
        mysqli_query($this->conn, $sql);

//       delete er por abar veiw page e return er jonno
        header("Location:view_student.php");
    }

}
