<html>
<title>Sherlock Systems</title>
<body>
<h1>Welcome Sherlock CTF. Log in Using Your Skills</h1>
<form action="extra.php" method="post">
    <input type="text" name="input" placeholder="Username" required/>
    <input type="text" name="input" placeholder="Password" required/>
    <input type="submit" name="submit" value="submit"/>
    <?php
    if (!isset($_COOKIE['loggedin'])) {
        setcookie("loggedin", "no", time() + 3600, "/");
    } else {
        if ($_COOKIE['loggedin'] == "yes") {
            echo "<h1>You logged in, Hacker!!! Let The Game Begin!!!</h1>
<h1>Your password is Red-headed League</h1>";
        } else {
            echo "<h1>Incorrect Login</h1>";
        }
    }
    ?>
</body>
</html>