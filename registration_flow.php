<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
    ?>
    <h2>User Registration Flow</h2>

    <form action="process.php" method="post">
        <label for="">First Name:</label>
        <input type="text" name="first_name" required><br><br>

        <label for="">Last Name:</label>
        <input type="text" name="last_name" required><br><br>

        <label for="">Username:</label>
        <input type="text" name="user_name" required><br><br>

        <label for="">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="">Password:</label>
        <input type="password" name="pass" required><br><br>

        <label for="">Confirm Password:</label>
        <input type="password" name="confirm_pass" required><br><br>

        <input type="submit" value="Register" name="save_user">
    </form>
</body>
</html>