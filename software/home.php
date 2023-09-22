<!DOCTYPE html>
<?php
    session_start();
    if( !isset($_SESSION['loggedin'])){
        header('Location: index.html');
        exit;
    }
?>
<head>
    <link href="homestyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class = "loggedin">
    <nav class="navtop">
        <div>
            <h1>random name</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Home page</h2>
        <p> Welcome back, <?$_SESSION['name']?>!</p>
    </div>
</body>
</html>