<html>
<head></head>
<body>
    <h3>This form was made with method="Get"</h3>
    <form action="display.php" method="Get">
        Name: <input type="text" name="name" /><br />
        Email Address: <input type="email" name="email_add" /><br />
        <input type="submit" value="Send" />
    </form>

    <h3>This form was made with method="Post"</h3>
    <form action="display.php" method="Post">
        Name: <input type="text" name="name" /><br />
        Email Address: <input type="email" name="email_add" /><br />
        <input type="submit" value="Send" />
    </form>
</body>
</html>