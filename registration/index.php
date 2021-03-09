<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
/*{
  $pdo = new PDO('mysql:host=localhost;dbname=ace_in_the_hole_db', 'zel_ace_user', 'myP4ssw0rd_');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}*/

//on my host
{
  $pdo = new PDO('mysql:host=localhost;dbname=irinaweb_ace_in_the_hole_db', 'irinaweb_zel_ace_user', 'myP4ssw0rd_');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}

catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''

if (isset($_POST['myflname']) && empty($_POST['honeypot'])) 

{
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    
    $honeypot = $_POST['honeypot'];
    $role = $_POST['role']; 
    $flname = $_POST['myflname']; 
    $emname = $_POST['emname'];
    $emphone = $_POST['emphone'];
    $email = $_POST['myemail']; 
    $phone = $_POST['myphone']; 
    //$date = $_POST['mydate']; 
    $age = $_POST['age']; 
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
    $comments = $_POST['mycomments'];
    
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    
   try {
       
      $sql = 'INSERT INTO registration SET
          role = :role,
          flname = :flname,
          emname = :emname,
          email = :email,
          phone = :phone,
          emphone = :emphone,
          /*date = :date,*/
          age = :age,
          gender = :gender,
          size = :size,
          saturday = :saturday,
          sunday = :sunday,
          comments = :comments';
          
       
      $s = $pdo->prepare($sql);
      $s->bindValue(':role', $_POST['role']);
      $s->bindValue(':flname', $_POST['myflname']);
      $s->bindValue(':emname', $_POST['emname']);
      $s->bindValue(':email', $_POST['myemail']);
      $s->bindValue(':phone', $_POST['myphone']);
      $s->bindValue(':emphone', $_POST['emphone']);
      //$s->bindValue(':date', $_POST['mydate']);
      $s->bindValue(':gender', $_POST['gender']);
      $s->bindValue(':age', $_POST['age']);
       $s->bindValue(':size', $_POST['size']);
      $s->bindValue(':saturday', $_POST['saturday']);
      $s->bindValue(':sunday', $_POST['sunday']);
      $s->bindValue(':comments', $_POST['mycomments']);
      
      $s->execute();
    }
    
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registrations: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
    
    include 'success.html.php';
    exit();

    // Add an else to load the initial page if the initial (line 19) if statement is false
 
    } 

  else {

 include 'registration.html.php'; //Modify this to include the initial file for this folder
      
  }
