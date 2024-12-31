<?php
session_start();
if (!isset($_POST['login'])) {
    echo "<script>
    alert('silakan login dahulu');
    document.location.href='login.php';
    </script>";
    exit;
}

//kosongkan session
$_SESSION = [];
session_unset();
session_destroy();
header("Location:index.html");
