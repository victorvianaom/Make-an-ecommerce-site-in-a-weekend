<!--    Coisas novas:
        . mysqli_connect() or die();
        . mysqli_query() or die();
-->
<html>
<head></head>
<body>
    <?php
        $DB_Host = "localhost";
        $user = "root";
        $password = "!!@@victor##$$";
        $database = "shopping";
        $connect = mysqli_connect($DB_Host, $user, $password, $database) or die ("deu pa conectar naum...");

        //$sql = 'show tables';
        //$result = mysqli_query($connect, $sql) or die (mysql_error());

        $email_address = $_POST['emailaddress'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $completename = $_POST['complete_name'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $zipcode = $_POST['zipcode'];
        $phone_no = $_POST['phone_no'];

        $sql = "INSERT INTO customers (email_address, password, complete_name, 
        address_line1, address_line2, city, state, zipcode, country, cellphone_no) 
        VALUES ('$email_address', (PASSWORD('$password')), '$completename', '$address1', 
        '$address2', '$city', '$state', '$zipcode', '$country', '$phone_no')";
        $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        if ($result) {
            ?>
            <p>Dear <?php echo $completename; ?>, your account was successfully created!</p>
            <?php
        } else {
            echo "Some error ocurred. Please use different email address.";
        }
    ?>
</body>
</html>