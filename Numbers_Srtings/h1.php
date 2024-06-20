<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Login Page - Legacy League</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #f5f5f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }
        h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }
        label {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: calc(100% - 12px);
            padding: 6px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .message {
            text-align: center;
            font-size: 14px;
            color: red;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <form action="h1.php" method="get">
        <h1>Legacy League Hotels</h1>
        <h2>Welcome to a Luxurious Experience</h2>
        <label for="user">User ID or Username:</label>
        <input type="text" id="user" name="user" placeholder="Enter User ID or Username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Enter E-mail" required>

        <input type="submit" value="Check">
    </form>
</body>
</html>



<?php
$k = $_GET['user'];
$l = $_GET['password'];
$m = $_GET['email'];

if ($k == 'Soumik' && $l == 'sgh_6' && $m == 'soumikghoshcodes@gmail.com') {
    echo '<div style="text-align: center; font-family: \'Times New Roman\', serif; margin-top: 50px;">';
    echo '<h1>Login Successful!</h1>';
    echo '<p>Congratulations. Login successful!</p>';
    echo '</div>';
} else {
    echo '<div style="text-align: center; font-family: \'Times New Roman\', serif; margin-top: 50px;">';
    echo '<h1>Invalid Login</h1>';
    echo '<p>Invalid Login Credentials!!!!</p>';
    echo '</div>';
}
?>
