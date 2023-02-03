<?php

require './classes/student.php';
$obj = new Student();

//get url theke data read korte pare
$student_id = $_GET['id'];
//echo $student_id;

$obj->delete_student($student_id);

