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


  $sql1="insert into employee_details_table(employee_first_name,employee_last_name,graduation_percentile)
  values ('$fname','$lname','$percentile')";
  // $sql="insert into demo (id,name,hobby) values ('$data', '$lname','$percentile')";
  $sql2="insert into employee_code_table(employee_code,employee_code_name,employee_domain)
  values ('$codename', '$codeName','$domain')";
  $sql3="insert into employee_salary_table(employee_salary,employee_code)
  values ('$salary','$codename')";
  $num="select MAX(employee_id) as id FROM employee_details_table";
  $result= mysqli_query($conn, $num);
  $row = mysqli_fetch_assoc($result);
  $ru="RU".($row['id']+1);
  // echo $ru;
  $sql4="insert into code(code)
  values ('$ru')";

  //
  // if ($conn->query($sql1) === TRUE) &&($conn->query($sql2) === TRUE)&&($conn->query($sql3) === TRUE)&&($conn->query($sql4) === TRUE){
  //     echo "New record created successfully in table\n";
  // }

  $displaySql1="select code,employee_first_name,employee_last_name,graduation_percentile from code as c inner join employee_details_table as ed where
  c.employee_id=ed.employee_id";
  $displaySql2="select code,employee_salary,employee_code from code as c inner join employee_salary_table as es where c.employee_id=es.employee_id";


  $result = $conn->query($displaySql1);

if ($result->num_rows > 0) {?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <table>


<?php     while($row = $result->fetch_assoc())  {
        echo "<tr>";
        echo "<td>".$row["code"]. " </td><td>".$row["employee_first_name"]. "</td><td> " .$row["employee_last_name"]."</td><td> ". $row["graduation_percentile"]. "</td>";
        echo "</tr>";
    }
}

echo " </table>";
  $result = $conn->query($displaySql2);
  if ($result->num_rows > 0) {
    echo   "<table>";
         while($row = $result->fetch_assoc())  {
            echo "<tr>";
            echo "<td>".$row["code"]. " </td><td>".$row["employee_salary"]. "</td><td> " .$row["employee_code"]."</td>" ;
            echo "</tr>";
        }
    }

    echo " </table>";  }?>

    </body>
  </html>
