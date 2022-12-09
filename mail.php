<?php include 'mail.php' ?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <!-- Linking CSS file -->
 <link rel="stylesheet" href="style.css">
 <title>Document</title>
</head>
 
<body>
 <div class="container">
 
 
  <form method="post" class="form" enctype="multipart/form-data">
   <div class="heading">
    <h2>Contact Form
     <h2 />
   </div>
 
   <div class="formGroup">
    <input type="text" name="name" id="name" placeholder="Name" required="">
   </div>
 
   <div class="formGroup">
    <input type="email" name="email" id="email" placeholder="Email ID"  required="">
   </div>
 
   <div class="formGroup">
    <input type="text" name="subject" placeholder="Subject" required="">
   </div>
 
   <div class="formGroup">
    <input type="text" name="message" placeholder="Your Message" required="">
   </div>
 
   <div class="formGroup">
    <input type="file" name="attachment" class="form-control" multiple>
   </div>
 
   <!-- Display submission status -->
   
 
   <div class="formGroup">
    <button class="btn2" name="submit" value="SUBMIT" type="submit">SUBMIT </button>
   </div>
 
   <form />
 </div>
</body>
</html>