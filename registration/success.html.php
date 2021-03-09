<!DOCTYPE html>

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
                <h2>Thank you!</h2>
                <p>Our records show you submitted the following:<br>
                  Full name: <?php echo htmlspecialchars ($flname, ENT_QUOTES, 'UTF-8');?><br>
                  Age: <?php echo htmlspecialchars ($age, ENT_QUOTES, 'UTF-8');?> <br>
                  Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8');?><br>
                  Phone:<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');?><br>
                  Emergency Contact Name:<?php echo htmlspecialchars($emname, ENT_QUOTES, 'UTF-8');?><br>
                  Emergency Contact Phone Number:<?php echo htmlspecialchars($emphone, ENT_QUOTES, 'UTF-8');?><br>
                  Gender:<?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8');?><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?><br>
                  T-shirt size: <?php echo htmlspecialchars($size, ENT_QUOTES, 'UTF-8');?><br>
                  Saturday Events: <?php echo htmlspecialchars($saturday, ENT_QUOTES, 'UTF-8');?><br>
                  Sunday Events: <?php echo htmlspecialchars($sunday, ENT_QUOTES, 'UTF-8');?><br>
                  Special Accommodations: <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8');?><br>
                </p>
            </main>
        
             <?php include '../includes/footer.inc.html.php';?>
        
    </div>
</body>
</html>