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
                <h2>Success!</h2>
                <p>We will be in contact with you soon:<br>
                  First Name: <?php echo htmlspecialchars ($myName, ENT_QUOTES, 'UTF-8');?> <br>
                  Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8');?><br>
                  Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8');?><br>
                  
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php';?>
        
    </div>
</body>
</html>