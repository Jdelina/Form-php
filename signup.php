<?php
if (isset($_POST['Fname']) && //USED TO DETERMINE WHETHER A VAR IS SET OR DECLARED
    isset($_POST['uname']) &&
    isset($_POST['pass'])) {

        include "db_conn.php";
        $fname = $_POST['Fname'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
    }

    //for the database

    $data = "fname=" . $fname . "&uname=" .$uname;

    if (empty($fname)) {
            $em ="Fullname is required";
            header ("Location: index.php?error=$em&$data");
            exit;
    }else if (empty($uname)) {
        $em ="Username is required";
            header ("Location: index.php?error=$em&$data");
            exit;
    } else if (empty($pass)){
        $em ="Password is required";
            header ("Location: index.php?error=$em&$data");
            exit;
    } else {

        //hashing password
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users(fname, username, password)
                VALUES (?, ?, ?)";
        $stmt =  $conn->prepare($sql);
        $stmt->execute([$fname, $uname, $pass]);

        header("Location: index.php?success=Your Account has been created successfully");
        exit;
    }








?>