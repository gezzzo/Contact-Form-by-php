<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,700;0,900;1,200;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center" style="font-family: 'Raleway', sans-serif;font-weight:900;
            padding-top:10px;font-size:50px;color:#757575">Contact Me</h1>
        <!--    start form-->
            <form action="" method="post" class="form">
                <input class="form-control" type="text" name="name" placeholder="Your name">
                <i class="fa fa-user fa-fw"></i>
                <input class="form-control" type="email" name="email" placeholder="Your email">
                <i class="fa fa-mail-bulk fa-fw"></i>
                <input class="form-control" type="tel" name="telephone" placeholder="Your phone">
                <i class="fa fa-phone fa-fw"></i>
                <textarea class="form-control" placeholder="Type Your message"></textarea>
                <input class="btn btn-success sub" type="submit" value="send">
                <i class="fas fa-paper-plane send"></i>


            </form>
        <!--    end form-->
        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>