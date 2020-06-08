<!--    Coisas novas:
        new MySQLi();
-->
<html>
<head></head>
<body>
    <?php
        //Connect to the database server
        $MySQLi = new MySQLi('localhost', 'root', '!!@@victor##$$', 'shopping');
        if ($MySQLi -> errno) {
            printf("Unable to connect to the database: <br /> %s.", $MySQLi -> errno);
            exit();
        } else {
            printf("Successfully connected with the MySQL server and shopping database is opened.");
        }
    ?>
</body>
</html>