
<!DOCTYPE html>

<!--
File Name: registration.php
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
      <h2>Registration Form</h2>
        <h3>For athletes who want to participate and volunteers who want to volunteer</h3>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="registration">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
          
          <label for="myflname">*Full Name:</label>
          <input type="text" name="myflname" id="myflname" required>
          
          <label for="age">*Age</label>
          <input type="number" name="age" id="age" min="1" max="100" >
          
          <label for="role">*Role:</label>
        <select size="1" name="role" id="role">
          <option>Choose Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
        </select>
          
          <label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone">
          
          <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
          
          <label for="emname">*Emergency Contact Name:</label>
          <input type="text" name="emname" id="emname" required>
          
          <label for="emphone">*Emergency Contact Phone Number:</label>
          <input type="tel" name="emphone" id="emphone"> 
          
          <label for="gender">*Gender:</label>
        <select size="1" name="gender" id="gender">
          <option>Your Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
          
     <label for="size">T-shirt Size:</label>
        <select size="1" name="size" id="size">
          <option>Your Size</option>
          <option value="xsmall">XS</option>
          <option value="small">S</option>
          <option value="medium">M</option>
          <option value="large">L</option>
          <option value="xlarge">XL</option>
        </select>
          
           <label for="saturday"><b>Saturday</b> Events Registering For:</label>
        <select size="1" name="saturday" id="saturday">
          <option>Choose Your Event</option>
          <option value="longcourse">Long Course - $240</option>
          <option value="olympic">Olympic - $110</option>
          <option value="halfmarathon">Half Marathon - $75</option>
          <option value="10k">10K - $50</option>
          </select>
          
               <label for="sunday"><b>Sunday</b> Events Registering For:</label>
        <select size="1" name="sunday" id="sunday">
          <option>Choose Your Event</option>
          
          <option value="sprint">Sprint - $90</option>
          <option value="try">Try-a-Tri - $65</option>
          <option value="splash">Splash n Dash </option>
            
          </select>
          
        <!label for="mydate"><!/label>
          <!input type="date" name="mydate" id="mydate">
          
        <label for="mycomments">Any Special Accommodations Needed</label>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20" ></textarea>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>
            
      <?php include '../includes/footer.inc.html.php';?>
        
    </div>
</body>
</html>