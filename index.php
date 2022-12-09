<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Send Multiple Attachment Using PHP</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script src="js/jquery.js"></script>
</head>
<body>
<h1>Send Multiple Attachment Using PHP</h1>
<div id="main" class="col-sm-12 col-md-6 col-lg-6">
<div id="login">
<h2>Message Box</h2>
<hr>
<form action="mail.php" method="post" enctype="multipart/form-data">
<h3>From : </h3>
<label>Sender's Name (Optional) : </label> <input type="text" name="" class="" placeholder="Enter Sender's Name"/>
<label>Sender's Email Address : </label> <input type="email" name="sen_email" class="sen_email" placeholder="Enter Sender's Email Address"/>
<h3>To : </h3>
<label>Receiver's Email Address : </label> <input type="email" name="rec_email" class="rec_email" placeholder="Enter Reciever's Email Address"/>
<label>Subject : </label>
<input type="text" name="email_sub" class="" placeholder="Subject"/>
<label>Message : </label>
<textarea name="box_msg" rows="10" cols="30">Write your message here...</textarea>
<div class="input_fields_wrap">
<div><input type="file" name="attachment" value="Attach File" id="first_attach" ></div>
</div>
<a class="add_field_button">Attach More Files</a>
<input type="submit" value="Send" id="submit"/>
</form>
</div>
</div>
</body>
</html>