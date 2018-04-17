<?php

    $link = mysqli_connect("shareddb1e.hosting.stackcp.net","vastukosh-32331f64","password98@","vastukosh-32331f64");
    if(isset($_GET['email']) && !empty($_GET['email'])) {
        $query = "UPDATE `users` SET status=1 WHERE email ='".mysqli_real_escape_string($link, $_GET['email'])."'";
        mysqli_query($link, $query);
        echo "<script> alert('Email address verified.'); </script>";
        echo "<script> location.href='index.php' </script>";
    }

?>