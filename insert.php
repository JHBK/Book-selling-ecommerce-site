 <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $mysqli = new mysqli("localhost", "id6860794_root", "123456", "id6860794_demo");

     

    // Check connection

    if($mysqli === false){

        die("ERROR: Could not connect. " . $mysqli->connect_error);

    }

     

    // Escape user inputs for security

    $title = $mysqli->real_escape_string($_REQUEST['title']);

    $name = $mysqli->real_escape_string($_REQUEST['username']);

    $mail = $mysqli->real_escape_string($_REQUEST['usermail']);
    $pwd = $mysqli->real_escape_string($_REQUEST['password']);
    $card = $mysqli->real_escape_string($_REQUEST['usercard']);
    $cardno = $mysqli->real_escape_string($_REQUEST['cardnumber']);
    $exp = $mysqli->real_escape_string($_REQUEST['expiration']);

     

    // attempt insert query execution

    $sql = "INSERT INTO person (title,username , usermail,password,usercard,cardnumber,expiration) VALUES ('$title', '$name', '$mail','$pwd','$card','$cardno','$exp')";

    if($mysqli->query($sql) === true){

        echo "Records inserted successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;

    }

     

    // Close connection

    $mysqli->close();

    ?>

