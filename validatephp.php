<?php
session_start();
$checkError=false;
if (isset($_POST['upload']))
{
  if ((!preg_match("/^[A-Za-z]{1,9}$/",$_POST['fname'])) ||(!preg_match("/^[A-Za-z]{1,9}$/",$_POST['lname'])) )
      $checkError=TRUE;
  if (!preg_match("/^[0-9]{1,3}(\.[0-9]{1,2})?$/",$_POST['percentile']))
      $checkError=TRUE;
  if (!preg_match("/^[0-9]+$/",$_POST['salary']))
      $checkError=TRUE;
  if (!preg_match("/^[a-zA-Z]+$/",$_POST['domain']))
      $checkError=TRUE;
  if (!preg_match("/^[a-z]+_[a-z]+$/",$_POST['codename']))
      $checkError=TRUE;
    if ($checkError) {
      header('Location:try.php');
    }
    else {
      $_SESSION['check']=TRUE;
      $_SESSION['fname']=$_POST['fname'];
      $_SESSION['lname']=$_POST['lname'];
      $_SESSION['percentile']=$_POST['percentile'];
      $_SESSION['salary']=$_POST['salary'];
      $_SESSION['domain']=$_POST['domain'];
      $_SESSION['codename']=$_POST['codename'];
      header('Location:temp.php');
    }
}

 ?>
