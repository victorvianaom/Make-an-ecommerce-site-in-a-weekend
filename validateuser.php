<!--coisas novas nesse script:
    mysqli_error($connect),
    mysqli_num_rows($result), 
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        extract($row);
        echo "Welcome " . $complete_name . " to our Shopping Mall <br />";
    }    
-->

<html>
<head></head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', '!!@@victor##$$', 'shopping') or die ('nao conectou');
        $query = "SELECT email_address, password, complete_name FROM customers 
        WHERE email_address like '" . $_POST['emailaddress'] . "' " . 
        "AND password like (PASSWORD('" . $_POST['password'] . "'))";
        $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                extract($row); // essa linha aqui que faz funcionar a variavel $complete_name abaixo.
                echo "Welcome " . $complete_name . " to our Shopping Mall <br />";
            }
        } else {
    ?>
            Invalid Email Address and/or Password<br />
            Not registered?
            <a href="validatesignup.php">Click Here</a> to register.<br /><br /><br />
            Wanna try again?<br />
            <a href="signin.php">Click Here</a> to try login again.<br />
            <?php
        }
            ?>
</body>
</html>