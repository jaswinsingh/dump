<?php
include 'mysql.php';
session_start();
if ($_SESSION['check'])
{
  $fname=$_SESSION['fname'];
  $lname=$_SESSION['lname'];
  $percentile=$_SESSION['percentile'];
  $salary=$_SESSION['salary'];
  $domain=$_SESSION['domain'];
  $codeName=$_SESSION['codename'];
  $codename="su_".strtolower($fname);

  /*$count="select * from employee_details_table";
  $result = mysqli_query($conn, $count);
  $row = mysqli_num_rows($result);
  $data='RU'.++$row;*/

  // $count1="select employee_id as temp from employee_details_table order by employee_id desc limit 1";
  // $result1 = mysqli_query($conn, $count1);
  // $row1= mysqli_fetch_assoc($result1);
  // $int =  filter_var($row1['temp'], FILTER_SANITIZE_NUMBER_INT);
  // $data='RU'.++$int;

  //
  // $sql1="insert into employee_details_table(employee_first_name,employee_last_name,graduation_percentile)
  // values ('$fname','$lname','$percentile')";
  // // $sql="insert into demo (id,name,hobby) values ('$data', '$lname','$percentile')";
  // $sql2="insert into employee_code_table(employee_code,employee_code_name,employee_domain)
  // values ('$codename', '$codeName','$domain')";
  // $sql3="insert into employee_salary_table(employee_salary,employee_code)
  // values ('$salary','$codename')";
  // // $num="select MAX(employee_id) as id FROM employee_details_table";

  //
  // if ($conn->query($sql1) === TRUE) {
  //     echo "New record created successfully in table 1 \n";
  // }
  // if ($conn->query($sql2) === TRUE) {
  //     echo "New record created successfully in table 2 \n";
  // }
  // if ($conn->query($sql3) === TRUE) {
  //     echo "New record created successfully in table 3 \n";
  //   }
        // $result= mysqli_query($conn, $num);
        // $row = mysqli_fetch_assoc($result);

        // echo $row['id'];
      ?>
