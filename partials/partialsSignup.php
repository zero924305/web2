<?php
include_once "resource/database.php";
include_once "resource/function.php";

if(isset($_POST['signupButton']))
{
  $form_erros = array();

  $required_fields =array('email','username','password');

  foreach ($required_fields as $name_of_field)
  {
    if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field]== NULL)
    {
      $form_erros[]=$name_of_field;
    }
  }
  if(empty($form_erros))
  {

  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirm_password'];
  $hashedpassword = sha1($password);
  if($_POST["password"] !=$_POST["confirm_password"])
  {
    $result = flashMessage("password and confirm password does not much");
  }
  try {
    $sqlInsert="INSERT INTO users (username, email, password, join_date)
    VALUES (:username, :email, :password, now())";
    $statement=$db->prepare($sqlInsert);
    $statement->execute(array(':username'=>$username, ':email'=>$email,':password'=>$hashedpassword));
    if($statement->rowCount()==1)
    {
      $result= "<p style='padding:20px; color:green;'> Registration Successful</p>";
    }
  } catch (PDOException $ex)
  {
    $result = "<p style='padding:20px; color:red;'> An error occurred:".$ex->getMessage()."</p>";
  }
}
else{
  if(count($form_erros)==1)
  {
    $result = "<p style='color: red;'> There was 1 error in the form<br>";
              $result .= "<ul style='color: red;'>";
              //loop through error array and display all items
              foreach($form_errors as $error)
              {
                  $result .= "<li> {$error} </li>";
              }
              $result .= "</ul></p>";
  }
  else
  {
    $result = "<p style='color: red;'> There were " .count($form_errors). " errors in the form <br>";
            $result .= "<ul style='color: red;'>";
            //loop through error array and display all items
            foreach($form_errors as $error)
            {
                $result .= "<li> {$error}</li>";
            }
            $result .= "</ul></p>";
  }
}
}
?>
