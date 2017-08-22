<html>
<?php
    session_start();
    if(isset($_SESSION['uID'])) header("Location: index.php"); 
    
    if(isset($_POST['uID']))
    {
        if($_POST['uID']=="AE15B001" && $_POST['pass']=="parsew0rd")
        $_SESSION['uID'] = $_POST['uID'];
        header("location: access.php");
    }
?>
<head>
    <title>Login</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .form-horizontal {
        border-radius: 5px;
        background-color: #d0edd0;
    }
</style>
<body>
    <h2 class="text-center"><strong>Enter your details here</strong></h2><br>
    <div class="col-lg-4 col-md-3 col-sm-1 hidden-xs"></div>
    <form method="post" action="" class="form-horizontal col-xs-12 col-sm-10 col-md-6 col-lg-4 bg-info">
        <br>
        <div class="form-group">
            <label class="control-label col-sm-4" for="name">UserID:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="uID" placeholder="Enter name" name="uID" value="AE15B001">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="name">Password:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="pass" placeholder="Enter name" name="pass" value="parsew0rd">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary center-block btn-block">Log In</button>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </form>
    <div class="col-lg-4 col-md-3 col-sm-1 hidden-xs"></div>
</body>
</html>