<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System TEST</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="home">
    <table border="0">
        <tr>
           <td>
                <div class="login">
                    <div class="box1">
                        <div class="icon">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg"  class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </center>
                        </div>
                        <h2>Teacher/Admin Login</h2>
                        <hr style="color:white;">
                            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
                                <h4>Username </h4>
                                <input type="text" name="username" id="username" placeholder="Username" class="input-feild">
                                <br><br><h4>Password </h4>
                                <input type="password" name="password" id="password" placeholder="Password" class="input-feild">
                                <br><br>
                                <input type="submit" value="Login as Teacher/Admin" class="login-btn">
                            </form>
                        <hr style="color:white;">
                    </div>
                </div>
           </td>
           <td>
           <div class="login">
                    <div class="box1">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                        </div>
                        <h2>Student <br> Login</h2>
                        <hr style="color:white;">
                            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
                                <h4>Username </h4>
                                <input type="text" name="username" id="username" placeholder="Username" class="input-feild">
                                <br><br><h4>Password </h4>
                                <input type="password" name="password" id="password" placeholder="Password" class="input-feild">
                                <br><br>
                                <input type="submit" value="Login as Student" class="login-btn">
                            </form>
                        <hr style="color:white;">
                    </div>
           </td>
        </tr>
    </table>



</body>
</html>
