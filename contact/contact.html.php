<!DOCTYPE html>

<!--
File Name: contact.html.php
Date: 02/2021
Programmer: Irina Zelepukhina
-->

<html lang="en">

<head>
     <title>Registration Form</title>
     <meta name="description"
content="Reserve your spot.">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link href="../css/styles.less" rel="stylesheet/less" type="text/css">
    <link href="../css/navigation.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    
</head>
  
    
    <body>
    <div id="wrapper">
        
        <?php include '../includes/header.inc.html.php';?>     
        <?php include '../includes/nav.inc.html.php';?>
      
    <main>
      <h2>Questions? We'd love to hear from you!</h2>
      <form method="post" action=" " id="inquiryForm">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
          <label for="role">Your Role:</label>
        <select size="1" name="role" id="role">
          <option>Choose Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
          <option value="interested"> Interested Party</option>
        </select>
        <label for="myQuestion">Question:</label>
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
           
      </form>
    </main>
        
        
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-7ca32977-2274-49a7-8137-097e577fce6c"></div>
        
    <?php include '../includes/footer.inc.html.php';?>
        
    </div>
</body>
</html>