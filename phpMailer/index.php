<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
    <form method="post" action="mail.php" enctype="multipart/form-data">
        <h1 class="text-primary text-center">Send Email</h1>
        <hr>
        <input type="email" placeholder="To" name="to" class="form-control" required><br>
        <input type="text" placeholder="Subject" name="subject" class="form-control" required><br>
        <textarea name="message"  placeholder="Message" class="form-control"></textarea><br>
        <input type="file" name="myfile" class="form-control">
        <br><br>
        <input type="submit" name="submit" value="Send Email" class="btn btn-outline-primary col-sm-12">

    </form>
 </div>

</body>
</html>

 
